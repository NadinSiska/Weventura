<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penyewaan;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    public function index()
    {
        $penyewaan = Penyewaan::whereIn('status', [0, 4])->get();
        return view('admin.penyewaan.waitinglist', ['penyewaan' => $penyewaan]);
    }

    public function booked()
    {
        $penyewaan = Penyewaan::whereIn('status', [1, 2, 3])->get();
        return view('admin.penyewaan.booked', compact('penyewaan'));
    }

    public function create()
    {
        return view('admin.penyewaan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'invoice' => 'required|string|max:250',
            'nama_penyewa' => 'required|string|max:250',
            'nama_barang' => 'required|string|max:250',
            'total_biaya' => 'required|numeric',
            'tanggal_sewa' => 'required|date',
            'durasi_sewa' => 'required|string|max:250',
            'tanggal_kembali' => 'required|date',
            'foto_identitas' => 'required|image|max:2048',
            'status' => 'required|integer|between:0,2',
        ]);

        if ($request->hasFile('foto_identitas')) {
            $file = $request->file('foto_identitas');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/identitas', $filename);
            $validated['foto_identitas'] = $filename;
        }

        Penyewaan::create($validated);

        return redirect()->route('admin.penyewaan.index')->with('success', 'Data penyewaan berhasil ditambahkan');
    }

    public function show(Penyewaan $penyewaan)
    {
        return view('admin.penyewaan.show', compact('penyewaan'));
    }

    public function edit(Penyewaan $penyewaan)
    {
        return view('admin.penyewaan.edit', compact('penyewaan'));
    }

    public function update(Request $request, Penyewaan $penyewaan)
    {
        $validated = $request->validate([
            'invoice' => 'required|string|max:250',
            'nama_penyewa' => 'required|string|max:250',
            'nama_barang' => 'required|string|max:250',
            'total_biaya' => 'required|numeric',
            'tanggal_sewa' => 'required|date',
            'durasi_sewa' => 'required|string|max:250',
            'tanggal_kembali' => 'required|date',
            'foto_identitas' => 'nullable|image|max:2048',
            'status' => 'required|integer|between:0,2',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:250',
            'jaminan' => 'required|string|max:250',
        ]);

        if ($request->hasFile('foto_identitas')) {
            $file = $request->file('foto_identitas');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/identitas', $filename);
            $validated['foto_identitas'] = $filename;
        }

        $penyewaan->update($validated);

        return redirect()->route('admin.penyewaan.index')->with('success', 'Data penyewaan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $penyewaan = Penyewaan::findOrFail($id);
        $penyewaan->update(['status' => 5]);

        return redirect()->back()->with('success', 'Status berhasil diubah menjadi Approved');

        return redirect()->route('admin.penyewaan.index')->with('success', 'Data penyewaan berhasil dihapus');
    }

    public function setStatusPending(Penyewaan $penyewaan)
    {
        $penyewaan->update(['status' => 0]);
        return redirect()->back()->with('success', 'Status berhasil diubah menjadi Pending');
    }

    public function setStatusApproved($id)
    {
        $penyewaan = Penyewaan::findOrFail($id);
        $penyewaan->update(['status' => 1]);

        return redirect()->back()->with('success', 'Status berhasil diubah menjadi Approved');
    }
    public function setStatusRented($id)
    {
        $penyewaan = Penyewaan::findOrFail($id);
        $penyewaan->update(['status' => 2]);

        return redirect()->back()->with('success', 'Status berhasil diubah menjadi Currently Rented');
    }

    public function setStatusReturned($id)
    {
        $penyewaan = Penyewaan::findOrFail($id);
        $penyewaan->update(['status' => 3]);

        return redirect()->back()->with('success', 'Status berhasil diubah menjadi Returned');
    }

    public function setStatusRejected($id)
    {
        $penyewaan = Penyewaan::findOrFail($id);
        $penyewaan->update(['status' => 4]);

        return redirect()->back()->with('success', 'Status berhasil diubah menjadi Rejected');
    }

public function getAllItemsFromSewa($id)
{
    $penyewaan = Penyewaan::with('items')->findOrFail($id);
    return response()->json($penyewaan->items);
}
}
