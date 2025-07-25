<?php

namespace App\Http\Controllers;

use App\Models\DeskripsiTambahan;
use App\Models\Tentang;
use Illuminate\Http\Request;

class DeskripsiTambahanController extends Controller
{
    public function create()
    {
        $tentangs = Tentang::all(); // jika ingin memilih tentang tertentu
        return view('deskripsi.create', compact('tentangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tentang_id' => 'required|exists:tentangs,id',
            'deskripsi' => 'required|string|max:1000',
        ]);

        DeskripsiTambahan::create([
            'tentang_id' => $request->tentang_id,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('dashboard')->with('success', 'Deskripsi tambahan berhasil ditambahkan.');
    }
    
    // Tampilkan semua deskripsi untuk dihapus
    public function index()
    {
        $deskripsi = DeskripsiTambahan::all();
        return view('deskripsi.index', compact('deskripsi'));
    }

    // Hapus deskripsi berdasarkan ID
    public function destroy($id)
    {
        $deskripsi = DeskripsiTambahan::findOrFail($id);
        $deskripsi->delete();

        return redirect()->route('deskripsi.index')->with('success', 'Deskripsi berhasil dihapus.');
    }

}

