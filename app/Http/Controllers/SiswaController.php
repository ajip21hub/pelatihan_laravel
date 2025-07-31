<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Logic to list all students
        $siswas = Siswa::paginate(10); // Assuming you have a Siswa model

        return view('siswa.index', compact('siswas')); // Assuming you have a view for listing students
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'usia' => 'required|integer|min:1',
            'alamat' => 'required|string',
            'wali' => 'required|string|max:255',
        ]);
        Siswa::create($validated);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'usia' => 'required|integer|min:1',
            'alamat' => 'required|string',
            'wali' => 'required|string|max:255',
        ]);
        $siswa->update($validated);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus!');
    }
}
