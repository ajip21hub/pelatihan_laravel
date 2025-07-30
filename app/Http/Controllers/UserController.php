<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show($id)
    {
        $jumlah = (10 + intval($id));

        return view('user', compact('jumlah', 'id'));
    }
}
