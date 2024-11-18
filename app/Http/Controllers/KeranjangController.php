<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    // Mengambil data item dalam sesi
    protected function getItems()
    {
        return session()->get('items', []);
    }

    // Menampilkan halaman daftar item
    public function index()
    {
        $items = $this->getItems();
        $total = array_sum(array_column($items, 'price'));

        return view('app.keranjang.index', compact('items', 'total'));
    }

    // Menampilkan detail item tertentu
    public function show($index)
    {
        $items = $this->getItems();

        if (isset($items[$index])) {
            $item = $items[$index];
            return view('show', compact('item'));
        }

        return redirect()->route('keranjang.index')->with('error', 'Item tidak ditemukan!');
    }

    // Menambahkan item baru (Store)
    public function store(Request $request)
    {
        $items = $this->getItems();

        $items[] = [
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'price' => $request->price,
        ];

        session()->put('items', $items);

        return redirect()->route('index')->with('success', 'Item berhasil ditambahkan!');
    }

    // Memperbarui item
    public function update(Request $request, $index)
    {
        $items = $this->getItems();

        if (isset($items[$index])) {
            $items[$index] = [
                'name' => $request->name,
                'image' => $request->image,
                'description' => $request->description,
                'price' => $request->price,
            ];

            session()->put('items', $items);

            return redirect()->route('index')->with('success', 'Item berhasil diperbarui!');
        }

        return redirect()->route('index')->with('error', 'Item tidak ditemukan!');
    }

    // Menghapus item
    public function destroy($index)
    {
        $items = $this->getItems();

        if (isset($items[$index])) {
            unset($items[$index]);
            session()->put('items', array_values($items)); // Reindex array
        }

        return redirect()->route('index')->with('success', 'Item berhasil dihapus!');
    }

    // Mengosongkan semua item
    public function clear()
    {
        session()->forget('items');
        return redirect()->route('index')->with('success', 'Semua item berhasil dihapus!');
    }
}
