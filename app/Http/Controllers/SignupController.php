<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function show()
    {
        return view('signup');
    }

    public function processSignup(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Optionally, you can log the user in here
        // Auth::login($user);

        // Redirect to user page with success message
        return redirect()->route('user.show', ['id' => $user->id])
            ->with('success', 'Akun berhasil dibuat! Selamat datang, '.$user->name.'.');
    }
}
