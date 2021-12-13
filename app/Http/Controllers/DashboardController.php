<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboardmodel;
use Validator;
use Storage;
use Response,File;
use Auth;



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator=validator::make(request()->all(),[
            
            'file'=>'required']);
            if($validator->Fails()){
                return[
                    'error'=>$validator->errors(),
                    'status'=>'validation failed'
                ];
  }
        //
        if($file=$request->file('file')){
            $file=$request->file->store('Public/documents');

        
        $dashboard =new dashboardmodel();
        $dashboard->photo=$file;
        $dashboard->fullname=$request->fullname;
        $dashboard->position=$request->position;
        $dashboard->phonenumber=$request->phonenumber;
        $dashboard->age=$request->age;
        $dashboard->gender=$request->gender;
        $dashboard->receivablesalary=$request->receivablesalary;
        $dashboard->totalpresent=$request->totalpresent;
        $dashboard->totalabsent=$request->totalabsent;
        $dashboard->halfdayleave=$request->halfdayleave;
        $dashboard->officialholiday=$request->officialholiday;
        $dashboard->intime=$request->intime;
        $dashboard->outtime=$request->outtime;
        $dashboard->save();
                

        return[
            'sucesss'=>true,
            'message'=>'image uploaded succesfully',
            'path'=>Storage::disk('public')->url($file)
        ];

    }
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
        //
    }
    public function getdashboard(){
        $data=dashboardmodel::where(['id'=>Auth::user()->id])->get();
        return [
            'message'=>'success',
            'data'=>$data
        ];
    }
}
