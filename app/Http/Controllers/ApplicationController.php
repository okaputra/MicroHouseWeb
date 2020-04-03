<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $application = DB::table('table_application')->get();
        return view('Application',['application' => $application]);
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
        DB::table('table_application')->insert([
            'applicationDate'=>$request->applicationDate,
            'requiredMonth'=>$request->requiredMonth,
            'requiredYear'=>$request->requiredYear,
            'status'=>$request->status,
            'residenceID'=>$request->idres,
        ]);
        return redirect('/application')->with('success','Application Submited Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detailApk = DB::table('table_application')->find($id);
        return view('applicationDetail',compact('detailApk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = DB::table('table_application')->where('id',$id)->get();
        return view('editApplication',['application'=> $application]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('table_application')->where('id',$request->id)->update([
            'applicationDate'=>$request->apkDate,
            'requiredMonth'=>$request->rqMonth,
            'requiredYear'=>$request->rqYear,
            'status'=>$request->sts,
        ]);
        return redirect('/application')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('table_application')->where('id',$id)->delete();
        return redirect('/application')->with('success','Application Deleted Successfully');
    }
}
