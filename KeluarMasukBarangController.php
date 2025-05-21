<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeluarMasukBarang;
use Illuminate\Support\Facades\Storage;

class KeluarMasukBarangController extends Controller
{
    public function index()
    {
        $barang = KeluarMasukBarang::all();
        return view('KeluarMasukBarang.index', compact('barang'));
    }

    public function create()
    {
        return view('KeluarMasukBarang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:50|unique:keluar_masuk_barang,code',
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga_satuan' => 'required|numeric',
            'jumlah' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_barang', 'public');
        }

        KeluarMasukBarang::create($data);

        return redirect()->route('KeluarMasukBarang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $barang = KeluarMasukBarang::findOrFail($id);
        return view('KeluarMasukBarang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = KeluarMasukBarang::findOrFail($id);

        $request->validate([
            'code' => 'required|string|max:50|unique:KeluarMasukBarang,code,' . $barang->id,
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga_satuan' => 'required|numeric',
            'jumlah' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($barang->foto && Storage::disk('public')->exists($barang->foto)) {
                Storage::disk('public')->delete($barang->foto);
            }
            $data['foto'] = $request->file('foto')->store('foto_barang', 'public');
        }

        $barang->update($data);

        return redirect()->route('KeluarMasukBarang.index')->with('success', 'Barang berhasil diupdate.');
    }

    public function destroy($id)
    {
        $barang = KeluarMasukBarang::findOrFail($id);

        if ($barang->foto && Storage::disk('public')->exists($barang->foto)) {
            Storage::disk('public')->delete($barang->foto);
        }

        $barang->delete();

        return redirect()->route('KeluarMasukBarang.index')->with('success', 'Barang berhasil dihapus.');
    }

    public function show($id)
    {
        $barang = KeluarMasukBarang::findOrFail($id);
        return view('KeluarMasukBarang.show', compact('barang'));
    }
}
