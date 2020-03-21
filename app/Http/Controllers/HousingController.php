<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HousingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residence = DB::table('residence')->get();
        return view('rentHouse', ['residence' => $residence ]);
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

 
        $file = $request->file('file');

        $file_name = time()."_".$file->getClientOriginalName();

        $fileDestination = 'data_file';
        $file->move($fileDestination,$file_name);

        DB::table('residence')->insert([
            'Address'=>$request->adr,
            'NumberOfUnit'=>$request->nou,
            'SizeUnit'=>$request->spu,
            'MonthlyRental'=>$request->mRn,
            'Availability'=>$request->ava,
            'Bedroom'=>$request->bed,
            'Bathroom'=>$request->bath,
            'livingRoom'=>$request->liv,
            'Garage'=>$request->gar,
            'Pool'=>$request->pol,
            'Image'=>$file_name,
        ]);
        return redirect('/rent')->with('success','Data Adding Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('residence')->find($id);
        return view('detail',compact('data'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('residence')->where('id',$id)->delete();
        return redirect('/rent')->with('success','Data Deleted Successfully');
    }
}
