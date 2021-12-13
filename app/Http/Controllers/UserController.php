<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\VerificationMail;
use Illuminate\Support\Facades\Mail;
use App\MailExample; 

class UserController extends Controller
{
    function login(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
    public function register(Request $request){
        $model=new User();
        $model->name= $request->sname;
        $model->email= $request->email;
        $model->password=Hash::make($request->password);
        $otp=$this->otp();
        $model->otp_code=$otp;
        if($model->save()){
            Mail::to($model->email)->send(new VerificationMail($model,$otp));
            return [
                'message'=>"user Created, Please Check your email to verify your email.",
                'user'=>$model->email
            ];
        }else{
            return ['message'=>"User not Created"];
        }
}
    public function getUser($id){
        return User::find($id);
    }
    public function otp(){
        $otp = rand(100000,999999);
        return $otp;
    }

    public function verifyotp(Request $request){
        $checkuser=User::where('otp_code',$request->otp_code)->where('email',$request->email);
        if($checkuser->exists()){
            $checkuser->update(['is_verified'=>1,'email_verified_at'=>date('y-m-d h:m:s'),'otp_code'=>NULL]);
            return['message'=>'User Verified'];
        }
        else{
            return['message'=>'User Not Verified'];
        }
    }
}