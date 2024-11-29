<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    // Mengambil data item favorit dalam sesi
    protected function getFavorites()
    {
        return session()->get('favorites', []);
    }

    // Menampilkan halaman daftar barang favorit
    public function index()
    {
        $favorites = $this->getFavorites();
        return view('app.favorite.index', compact('favorites'));
    }

    // Menambahkan item favorit baru
    // Menambahkan item favorit baru
public function store(Request $request)
{
    $favorites = $this->getFavorites();

    // Cek jika item sudah ada di daftar favorit
    foreach ($favorites as $favorite) {
        if ($favorite['name'] === $request->name) {
            return redirect()->route('favorites.index')->with('error', 'Item sudah ada di favorit!');
        }
    }

    $favorites[] = [
        'name' => $request->name,
        'image' => $request->image,
        'description' => $request->description,
        'price' => $request->price,
    ];

    session()->put('favorites', $favorites);

    return redirect()->route('favorites.index')->with('success', 'Item berhasil ditambahkan ke favorit!');
}

// Menghapus item dari daftar favorit
public function destroy($index)
{
    $favorites = $this->getFavorites();

    if (isset($favorites[$index])) {
        unset($favorites[$index]);
        session()->put('favorites', array_values($favorites)); // Reindex array
    }

    return redirect()->route('favorites.index')->with('success', 'Item berhasil dihapus dari favorit!');
}

// Mengosongkan semua item favorit
public function clear()
{
    session()->forget('favorites');
    return redirect()->route('favorites.index')->with('success', 'Semua item favorit berhasil dihapus!');
}
}