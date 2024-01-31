<?php

namespace App\Http\Controllers;

use App\Models\password_reset;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class retrivePassword extends Controller
{
    //
    public function getpage(){
        return view('reset_password.password_change');
    }



    public function sendEmail(Request $request){

$formField=$request->validate([
    'email'=>'email|exists:users,email'
]);
$token=Str::random(35);
$now=Carbon::now();
$formField['created_at']=$now;
$formField['token']=$token;
password_reset::create($formField);
$url=route('forgetpassword.form',['email'=>$formField['email'],'token'=>$token]);
$data=[
'from'=>'olait768@gmail.com',
'to'=>$request->email,
'subject'=>'Reset Password',
'body'=>'Reset your password by clicking the below link'
];
try {
        Mail::send('email.index', ['data' => $data,'url'=>$url], function ($message) use ($data) {
        $message->from($data['from'], $data['from']);
        $message->to($data['to']);
        $message->sender($data['from'], $data['from']);
        $message->replyTo($data['from'], $data['from']);
        $message->subject($data['subject']);
    });

} catch (Exception $e) {
    dd("Error: " . $e->getMessage());
}


return redirect()->back()->with('message','An email has been successfully sent to your email!!!');
    }

    public function form(){
        return view('email.reset_password_form');
    }


    public function getFormData(Request $request){
    $formField=$request->validate([
    'password'=>'confirmed|min:6'
    ]);

    $token=password_reset::where('token',$request->token);

    if($token){
        $password=bcrypt($formField['password']);
        User::where('email',$request->email)->update(['password'=>$password]);
        password_reset::where('token',$request->token)->delete();

    }

 return redirect()->route('student.login');
    }
}
