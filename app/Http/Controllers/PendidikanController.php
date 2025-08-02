<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller  
{

public function index()
{
    $pendidikans = Pendidikan::all();
    return view('pendidikan.index', compact('pendidikans'));
}

public function create()
{
    $pendidikans = Pendidikan::all();
    return view('pendidikan.create', compact('pendidikans'));
}

    public function store(Request $request)
    {
        $request->validate([
            "nama_sekolah" => "required",
            "jurusan" => "required",
            "tahun" => "required",
        ]);

        pendidikan::create([
            "nama_sekolah" => $request->nama_sekolah,
            "jurusan" => $request->jurusan,
            "tahun" => $request->tahun
        ]);

        return redirect()->route('dashboard');
    }


public function edit($id)
{
    $pendidikan = Pendidikan::findOrFail($id);
    return view('pendidikan.edit', compact('pendidikan'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama_sekolah' => 'required|string|max:255',
        'jurusan' => 'nullable|string|max:255',
        'tahun' => 'nullable|string|max:20',
    ]);

    $pendidikan = Pendidikan::findOrFail($id);

    // Update manual
    $pendidikan->nama_sekolah = $request->nama_sekolah;
    $pendidikan->jurusan = $request->jurusan;
    $pendidikan->tahun = $request->tahun;
    $pendidikan->save();

    return redirect()->route('dashboard')->with('success', 'Data pendidikan berhasil diperbarui.');
}


public function destroy($id)
{
    Pendidikan::destroy($id);
    return back()->with('success', 'Data pendidikan berhasil dihapus.');
}


}