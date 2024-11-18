<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Barang; // Import the Barang model

class BarangController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel barang
        $items = Barang::all(); // atau Barang::get();
        $categories = Kategori::all(); // Ambil semua data dari tabel kategori
        return view('admin.item.index', compact('items', 'categories')); // Pass categories to the view
    }


    public function create()
    {
        return view('admin.item.create'); // Return the view to create a new item
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            // Add other validation rules as necessary
        ]);

        Barang::create($request->all()); // Save the new item
        return redirect()->route('admin.item.index')->with('success', 'Item has been saved successfully!'); // Redirect with success message
    }

    public function show($id)
    {
        $item = Barang::findOrFail($id); // Find the item by ID
        return view('admin.item.show', compact('item')); // Return the view to show the item
    }

    public function edit($id)
    {
        $item = Barang::findOrFail($id); // Find the item by ID
        return view('admin.item.edit', compact('item')); // Return the view to edit the item
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            // Add other validation rules as necessary
        ]);

        $item = Barang::findOrFail($id); // Find the item by ID
        $item->update($request->all()); // Update the item
        return redirect()->route('admin.item.index')->with('success', 'Item has been updated!'); // Redirect with success message
    }

    public function destroy($id)
    {
        $item = Barang::findOrFail($id); // Find the item by ID
        $item->delete(); // Delete the item
        return redirect()->route('admin.item.index')->with('success', 'Item has been deleted!'); // Redirect with success message
    }
}
