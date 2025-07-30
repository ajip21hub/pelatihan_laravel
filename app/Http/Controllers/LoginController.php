<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $email = $request->email;

        return view('welcome', compact('email'));

        // salah
        // return kembali ke halaman login dengan pesan error
    }
}
