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
            'HouseName'=>$request->hsName,
            'Address'=>$request->adr,
            'UnitNumber'=>$request->nou,
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
        return redirect('/rent')->with('success','Set up Residence Successfully');
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
        $residence = DB::table('residence')->where('id',$id)->get();
        return view('edit',['residence'=> $residence]);
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
        $file = $request->file('filee');

        $file_name = time()."_".$file->getClientOriginalName();

        $fileDestination = 'data_file';
        $file->move($fileDestination,$file_name);

        DB::table('residence')->where('id',$request->id)->update([
            'HouseName'=>$request->hsNamee,
            'Address'=>$request->adrr,
            'UnitNumber'=>$request->nouu,
            'SizeUnit'=>$request->spuu,
            'MonthlyRental'=>$request->mRnn,
            'Availability'=>$request->avaa,
            'Bedroom'=>$request->bedd,
            'Bathroom'=>$request->bathh,
            'livingRoom'=>$request->livv,
            'Garage'=>$request->garr,
            'Pool'=>$request->poll,
            'Image'=>$file_name,
        ]);
        return redirect('/rent')->with('success','Data Updated Successfully');
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

    public function allocate(Request $request){
        DB::table('allocation')->insert([
            'date_from'=>$request->allocationDate,
            'date_end'=>$request->endDateAlo,
            'duration'=>$request->Duration,
            'unit_id'=>$request->applicationID
        ]);
        DB::table('table_application')->where('id','=',$request->applicationID)->update([
            'status'=>$request->status,
        ]);
        return redirect('/application')->with('success','Allocation Successfully');
    }
    
    public function reject(Request $request){
        DB::table('table_application')->where('id',$request->id)->update([
            'status'=>$request->statusReject,
        ]);
        return redirect('/application')->with('success','Rejected Successfully');
    }
}
