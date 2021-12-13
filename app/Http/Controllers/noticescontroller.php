<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noticesmodel;
use Validator;
use Storage;
use Response,File;

class noticescontroller extends Controller
{
    //
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
  
        $notices =new noticesmodel();
        $notices->fullname=$request->fullname;
        $notices->text=$request->text;
        $notices->time=$request->time;
        $notices->save();
                

        return[
            'sucesss'=>true,
            'message'=>'succesfull',
            
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
    public function getallnotices(){
        return noticesmodel::all();
}
}

