<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $req)
    {
        $formFields = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($formFields)) {

            // 🔥 VERY IMPORTANT
            $req->session()->regenerate();

            $user = Auth::user();

            $role = trim(strtolower($user->role));

if ($role === 'teacher') {
    return redirect('/teacher/dashboard');

} elseif ($role === 'admin') {
    return redirect('/admin/dashboard');

} elseif ($role === 'student') {
    return redirect('/student/dashboard');

} else {
    Auth::logout();
    return back()->with('message', 'Invalid role');
}
        }
    }

    public function logout(Request $req)
    {
        Auth::logout(); // recommended
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/');
    }
}
