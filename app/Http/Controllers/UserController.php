<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $users = User::all();
        // $user = user::with('department')->get();
        // dd($user);
        $users = User::with('department')->get();

        // dd($users);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $depm = Department::all();

        return view('users.add', compact('depm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->file('profile'));

        if($request->hasFile('profile')){
            $rule = [
               'profile' => 'required',
               'profile.*' => 'image|mimes:jpg,jpeg,png,gif,svg',
           ];
           $message = [
               'profile.*.mimes' => 'ต้องเป็นรูปภาพเท่านั้น เช่น jpg, jpeg, png, gif, svg',
           ];
           
        //    $errors = $this->validate($request, $rule, $message);
           
        //    if(!isset($errors)){
        //        return redirect()->back()->withInput();
        //    }

           $profile = $request->file('profile');
           
           foreach($profile as $profile_pic){
               $filename = $profile_pic->store('upload/profile', 'public');
           }

        } else {
            $filename = 'upload/profile/cms_profile.jpg';
        }
        
        //
        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'depm_id' => $request->get('depm_id'),
            'user_type' => $request->get('user_type'),
            'password' => bcrypt('pacc2021'),
            'profile' => $filename,
        ]);

        // dd($user);
    
        $user->save();
        return redirect()->route('user.index')->with('success', 'บันทึกข้อมูลผู้ใช้สำเร็จแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $depm = Department::all();
        $user = User::findOrFail($id);
        return view('users.edit', compact('depm','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $user = User::findOrFail($id);

        if($request->hasFile('profile')){
            $rule = [
               'profile' => 'required',
               'profile.*' => 'image|mimes:jpg,jpeg,png,gif,svg',
           ];
           $message = [
               'profile.*.mimes' => 'ต้องเป็นรูปภาพเท่านั้น เช่น jpg, jpeg, png, gif, svg',
           ];
           
        //    $errors = $this->validate($request, $rule, $message);
           
        //    if(!isset($errors)){
        //        return redirect()->back()->withInput();
        //    }

           $profile = $request->file('profile');
           
           foreach($profile as $profile_pic){
               $filename = $profile_pic->store('upload/profile', 'public');
           }
           
           if($user->profile <> '' || $user->profile <> 'upload/profile/cms_profile.jpg'){
                Storage::disk('public')->delete($user->profile);
           }

        } else {
            $filename = 'upload/profile/cms_profile.jpg';
        }

        //
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->depm_id = $request->get('depm_id');
        $user->user_type = $request->get('user_type');
        $user->profile = $filename;
        // dd($user);

        $user->save();
        return redirect()->route('user.index')->with('success', 'ทำการแก้ไขข้อมูลผู้ใช้ระบบเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);

        //dd($user->profile);
        if($user->profile <> '' || $user->profile <> 'upload/profile/cms_profile.jpg'){
            Storage::disk('public')->delete($user->profile);
        }

        $user->delete();

        return redirect()->route('user.index')->with('delete', 'ข้อมูลได้ทำการลบเรียบร้อยแล้ว');
    }
}
