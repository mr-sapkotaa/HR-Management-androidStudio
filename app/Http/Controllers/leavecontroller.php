<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leavemodel;
use Validator;
use Response,File;
class leavecontroller extends Controller    
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
        $leave =new leavemodel();
        $leave->from=$request->from;
        $leave->to=$request->to;
        $leave->type=$request->type;
        $leave->reason=$request->reason;
       $leave->save();
                

        return[
            'sucesss'=>true,
            'message'=>'sucessfully inserted',
        
        ];

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
    public function getalldata(){
        return leavemodel::all();
}
    }