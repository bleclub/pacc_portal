<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $depms = Department::all();

        return view('department.index', compact('depms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $depm = new Department([
            'depm_id' => $request->get('depm_id'),
            'depm_name' => $request->get('depm_name'),
            'depm_shortname' => $request->get('depm_shortname'),
        ]);

        // dd($depm);
        
        $depm->save();

        return redirect()->route('department.index')->with('success', 'ข้อมูลบันทึกเรียบร้อย');

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
        $depm = Department::findOrFail($id);
        return view('department.edit' , compact('depm'));
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
        //
        $depm = Department::findOrFail($id);
    
        $depm->depm_id = $request->get('depm_id');
        $depm->depm_name = $request->get('depm_name');
        $depm->depm_shortname = $request->get('depm_shortname');

        // dd($depm);

        $depm->save();
        return redirect()->route('department.index')->with('success', 'ข้อมูลบันทึกเรียบร้อย');
        
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
        $depm = Department::findOrFail($id);
        
        $depm->delete();
    
        return redirect()->route('department.index')->with('delete', 'ลบข้อมูลเรียบร้อย');

    }
}
