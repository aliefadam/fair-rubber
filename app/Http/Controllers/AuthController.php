<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login", [
            "title" => "Login"
        ]);
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route("admin.dashboard");
        }

        return redirect()->back()->withInput()->with("message", [
            "jenis" => "error",
            "pesan" => "Username atau password salah!"
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
