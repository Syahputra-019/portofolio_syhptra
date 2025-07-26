<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller  
{
    public function index()
    {
        $tentang = tentang::all();
        return view('dashboard', compact('tentang'));
    }
    public function welcome()
    {
        $tentang = Tentang::all(); // Ambil semua data dari model Tentang
        return view('welcome', compact('tentang'));
    }

    public function edit()
    {
        $data = Tentang::first(); // atau Tentang::where('user_id', auth()->id())->first();
        return view('tentangs.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $tentang = Tentang::findOrFail($id);
        $tentang->nama = $request->nama;
        $tentang->deskripsi = $request->deskripsi;
        $tentang->save();

        return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui.');
    }


    public function create()
    {
        return view('tentang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "deskripsi" => "required",
        ]);

        tentang::create([
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi
        ]);

        return redirect()->route('dashboard');
    }

    public function tambahan()
    {
        return $this->hasMany(DeskripsiTambahan::class);
    }

}
