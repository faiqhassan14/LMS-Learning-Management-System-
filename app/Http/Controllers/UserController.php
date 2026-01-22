<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Login(Request $req){
        // $formFields = $req->validate([
        //     "email" => 'required',
        //     "password" => 'password'
        // ]);

        $formFields = [
            "email" => $req->input('email'),
            "password" => $req->input('password')
        ];

        if(Auth::attempt($formFields)){
            return redirect('/teacher/dashboard');
        }else{
            return back()->with('message', 'Invalid Credentials');
        }
    }
}