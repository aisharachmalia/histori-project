<?php

namespace App\Http\Controllers;

use App\Models\Tokoh;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TokohController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tokohs = Tokoh::all(); // Ambil semua data tokoh
        return view('tokoh.index', compact('tokohs'));
    }

    public function create()
    {
        $kategoris = Kategori::all(); // Ambil semua data kategori
        return view('tokoh.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'kategori_id' => 'required|exists:kategoris,id', // Menggunakan kategori_id
            'tgl_lahir' => 'required|date',
        ]);

        $foto = $request->file('foto');
        $fotoName = time().'.'.$foto->extension();
        $foto->move(public_path('images/tokoh'), $fotoName);

        Tokoh::create([
            'nama' => $request->nama,
            'foto' => $fotoName,
            'kategori_id' => $request->kategori_id, // Simpan kategori_id
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return redirect()->route('tokoh.index')->with('success', 'Data tokoh berhasil disimpan');
    }

    public function show(Tokoh $tokoh)
    {
        return view('tokoh.show', compact('tokoh'));
    }

    public function edit(Tokoh $tokoh)
    {
        $kategoris = Kategori::all(); // Ambil semua data kategori
        return view('tokoh.edit', compact('tokoh', 'kategoris'));
    }

    public function update(Request $request, Tokoh $tokoh)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kategori_id' => 'required|exists:kategoris,id', // Menggunakan kategori_id
            'tgl_lahir' => 'required|date',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            $oldFotoPath = public_path('images/tokoh/' . $tokoh->foto);
            if (File::exists($oldFotoPath)) {
                File::delete($oldFotoPath);
            }

            // Upload foto baru
            $fotoName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('images/tokoh'), $fotoName);
            $tokoh->foto = $fotoName;
        }

        $tokoh->update([
            'nama' => $request->nama,
            'kategori_id' => $request->kategori_id, // Update kategori_id
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return redirect()->route('tokoh.index')->with('success', 'Tokoh berhasil diubah!');
    }

    public function destroy(Tokoh $tokoh)
    {
        $fotoPath = public_path('images/tokoh/' . $tokoh->foto);
        if (File::exists($fotoPath)) {
            File::delete($fotoPath);
        }

        $tokoh->delete();
        return redirect()->route('tokoh.index')->with('success', 'Tokoh berhasil dihapus!');
    }
}
