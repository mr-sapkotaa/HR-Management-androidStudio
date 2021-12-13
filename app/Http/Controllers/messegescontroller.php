<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\messegesmodel;
use Validator;
use Storage;
use Response,File;

class messegescontroller extends Controller
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

        
        $messeges =new messegesmodel();
        $messeges->photo=$file;
        $messeges->fullname=$request->fullname;
        $messeges->text=$request->text;
        $messeges->time=$request->time;
         $messeges->save();
                

        return[
            'sucesss'=>true,
            'message'=>' success',
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
    public function getallmesseges(){
        return messegesmodel::all();
}
}

