<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    // Show the guest book form
    public function create()
    {
        return view('tamu_form');
    }

    // Store the guest book entry
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:tamus,email',
            'telepon' => 'nullable|string|max:20',
            'pesan' => 'nullable|string',
        ]);

        Tamu::create($validated);

        return redirect()->back()->with('success', 'Terima kasih sudah mengisi buku tamu!');
    }

    // Show all guest book entries
    public function index()
    {
        $tamus = Tamu::latest()->get();

        return view('tamu_index', compact('tamus'));
    }

    // Show detail of a guest book entry
    public function show($id)
    {
        $tamu = Tamu::findOrFail($id);

        return view('tamu_detail', compact('tamu'));
    }

    // Show edit form
    public function edit($id)
    {
        $tamu = Tamu::findOrFail($id);

        return view('tamu_edit', compact('tamu'));
    }

    // Update tamu
    public function update(Request $request, $id)
    {
        $tamu = Tamu::findOrFail($id);
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:tamus,email,'.$id,
            'telepon' => 'nullable|string|max:20',
            'pesan' => 'nullable|string',
        ]);
        $tamu->update($validated);

        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil diupdate!');
    }

    // Delete tamu
    public function destroy($id)
    {
        $tamu = Tamu::findOrFail($id);
        $tamu->delete();

        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil dihapus!');
    }
}
