<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index() {
        $bukus = Buku::all();
        return view('buku.layouts.index', compact('bukus'));
    }

    public function create() {
        return view('buku.layouts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'kode_buku' => 'required|unique:bukus',
            'judul' => 'required',
            'penulis' => 'required',
            'harga' => 'required|integer|digits_between:1,5'
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil ditambahkan');
    }

    public function show($id) {
        $buku = Buku::find($id);
        return view('buku.layouts.show', compact('buku'));
    }

    public function edit($id) {
        $buku = Buku::find($id);
        return view('buku.layouts.edit', compact('buku'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'harga' => 'required|integer|digits_between:1,5'
        ]);

        $buku = Buku::find($id);
        $buku->update($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui');
    }

    public function destroy($id) {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus');
    }
}
