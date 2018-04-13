<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;
use App\User1;
use Illuminate\Support\Facades\Mail;
class RegisterController extends Controller
{
    //
    public function register(Request $request){
        $user1 = new User1;
        $user1->email = $request->email;
        $user1->password = $request->password;
        $user1->save();
        return response([
            'status'=>'success',
            'data'=>$user1
        ],200);
    }
    public function sendMail(){
        Mail::raw('123456',function($message){
            $message->subject('ceshi');
            $message->to('1026374981@qq.com');
        });
    }
}
