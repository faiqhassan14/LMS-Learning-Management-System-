<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AddUser(Request $req){
        $formFields = $req->validate([
            "name" => ['required', 'min:3'],
            "email" => ['required', 'email'],
            "password" => ['required', 'min:6'],
            "role" => ['required'],
            "gender" => ['required'],
            "number" => ['required', 'numeric', 'digits:11'],
            "course" => ['required'],
            "image" => ['required', 'mimes:jpg,png,jpeg', 'max:5048'],
            "batch_assigned" => 'required',

        ]);

        $formFields['image']=$req->file('image')->store('user_images', 'public');

        $formFields['password'] = bcrypt($formFields['password']);

        User::create($formFields);
        return back()->with('message', 'User Added Successfully!');

    }
}
