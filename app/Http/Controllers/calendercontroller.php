<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calendermodel;


class calendercontroller extends Controller
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
    public function calender(Request $request)
    {
       
        
        $calender =new calendermodel();
        $calender->date=$request->date;
        $calender->upcomingevents=$request->upcomingevents;
        $calender->save();
                

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
    public function getcalender(){
        return calendermodel::all();
}
    }
