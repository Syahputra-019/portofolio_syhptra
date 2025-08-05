<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::all();
        return view('portofolio.index', compact('portofolios'));
    }

    public function create()
    {
        return view('portofolio.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string',
            'tahun' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:png,jpg,jpeg',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('portofolio', 'public');
        }

        Portofolio::create($data);
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        return view('portofolio.edit', compact('portofolio'));
    }

    public function update(Request $request, $id)
    {
        $portofolio = Portofolio::findOrFail($id);
        $data = $request->validate([
            'judul' => 'required|string',
            'tahun' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:png,jpg,jpeg',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('portofolio', 'public');
        }

        $portofolio->update($data);
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        $portofolio->delete();
        return back();
    }

}
