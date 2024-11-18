<?php

namespace App\Http\Controllers\Admin;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Penyewaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $barang = Barang::all(); // Assuming you have a Barang model
        $penyewaan = Penyewaan::all(); // Assuming you have a Penyewaan model
        return view('admin.dashboard', compact('kategori', 'barang', 'penyewaan'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|max:50',
        ]);

        Kategori::create($validated);

        return redirect()->route('admin.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id_kategori)
    {
        $kategori = Kategori::findOrFail($id_kategori);
        return view('admin.edit', compact('kategori'));
    }

    public function update(Request $request, $id_kategori)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|max:50',
        ]);

        $kategori = Kategori::findOrFail($id_kategori);
        $kategori->update($validated);

        return redirect()->route('admin.index')->with('success', 'Kategori berhasil diupdate.');
    }

    public function destroy($id_kategori)
    {
        $kategori = Kategori::findOrFail($id_kategori);
        $kategori->delete();

        return redirect()->route('admin.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
