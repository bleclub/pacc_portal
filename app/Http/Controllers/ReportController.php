<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $reports = Report::all();

        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reports.add');
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
        

        $reports = new Report([
            'case_id' => $request->get('case_id'),
            'department' => $request->get('department'),
            'staff_name' => $request->get('staff_name'),
            'wanted_id' => $request->get('wanted_id'),
            'court_name' => $request->get('court_name'),
            'accuse_id_card' => $request->get('accuse_id_card'),
            'accuse_name' => $request->get('accuse_name'),
            'allegation_detail' => $request->get('allegation_detail'),
            'attorney_name' => $request->get('attorney_name'),
            'expire_date' => $request->get('expire_date'),
            'announce_date' => $request->get('announce_date'),
            'status' => 'enable'
         ]);

        //  dd($reports);
         $reports->save();
         return redirect()->route('report.index')->with('success','ข้อมูลหมายเลขคดี: '.$request->get('case_id').' ได้ทำการบันทึกเรียบร้อยแล้ว');

        // return 'Completed';
         
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
        $report = Report::findOrFail($id);

        // dd($report);
        return view('reports.edit', compact('report'));
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
        $report = Report::findOrFail($id);

        $report->case_id = $request->get('case_id');
        $report->department = $request->get('department');
        $report->staff_name = $request->get('staff_name');
        $report->wanted_id = $request->get('wanted_id');
        $report->court_name = $request->get('court_name');
        $report->accuse_id_card = $request->get('accuse_id_card');
        $report->accuse_name = $request->get('case_id');
        $report->allegation_detail = $request->get('case_id');
        $report->attorney_name = $request->get('attorney_name');
        $report->expire_date = $request->get('expire_date');
        $report->announce_date = $request->get('announce_date');

        // dd($report);
        $report->save();
        return redirect()->route('report.index')->with('success','แก้ไขหมายเลขคดี: '.$request->get('case_id').' เรียบร้อยแล้ว');


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
        $report = Report::findOrFail($id);
        $report->delete();

        return redirect()->route('report.index')->with('delete', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
