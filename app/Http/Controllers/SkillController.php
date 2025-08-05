<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SkillController extends Controller
{


public function index()
{
    $skills = Skill::all();
    return view('skills.index', compact('skills'));
}

public function create()
{
    return view('skills.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'nama' => 'required|string|max:255',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('logo')) {
        $data['logo'] = $request->file('logo')->store('skills', 'public');
    }

    Skill::create($data);
    return redirect()->route('dashboard')->with('success', 'Skill berhasil ditambahkan');
}

public function edit($id)
{
    $skill = Skill::findOrFail($id); // Ambil data berdasarkan ID
    return view('skills.edit', compact('skill'));
}


public function update(Request $request, $id)
{
    $skill = Skill::findOrFail($id);
    $data = $request->validate([
        'nama' => 'required|string|max:255',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('logo')) {
        if ($skill->logo) {
            Storage::disk('public')->delete($skill->logo);
        }
        $data['logo'] = $request->file('logo')->store('skills', 'public');
    }

    $skill->update($data);
    return redirect()->route('dashboard')->with('success', 'Skill berhasil diupdate');
}

public function destroy($id)
{
    $skill = Skill::findOrFail($id);

    if ($skill->logo) {
        Storage::disk('public')->delete($skill->logo);
    }

    $skill->delete();

    return redirect()->route('dashboard')->with('success', 'Skill berhasil dihapus');
}


}
