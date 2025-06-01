<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class ManagerAuthController extends Controller
{
    public function login()
{
  return view('admin/login');
}

    public function authenticate(LoginRequest $request)
{
  $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            $user = Auth::user();

           
                return redirect()->intended('/admin/attendance/list');
            
}
}
}