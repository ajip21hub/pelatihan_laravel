<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $jumlah = (10 + intval($id));

        return view('user', compact('jumlah', 'id', 'user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('user_edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);
        $user->update($validated);

        return redirect()->route('user.show', ['id' => $user->id])
            ->with('success', 'Profil berhasil diperbarui!');
    }
}
