<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = \App\Models\Barang::paginate(10);
        return view('barang', compact('barangs'));
    }
   
    public function create() //untuk mengarahkan ke halaman create
    {
        return view('barang.create');
    }
    public function store(Request $request) //untuk nambah data baru ke databased
    {
        $barang = new Barang();
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;

        $barang->save();
        return redirect('/barang')->with('success', 'Barang berhasil ditambahkan');

        // $request->validate([
        //     'nama_barang' => 'required',
        //     'harga' => 'required|numeric',
        //     'stok' => 'required|integer',
        //     // Sesuaikan dengan field yang Anda butuhkan
        // ]);

        // Barang::create($request->all());
        
        // return redirect('/barang')->with('success', 'Barang berhasil ditambahkan');
    }
    public function edit($id) //untuk mengarahkan ke halaman edit
{
    $barang = Barang::findOrFail($id); //ngecek apakah ada atau kosong //data barang berdasarkan id tertentu
    return view('barang.edit', compact('barang'));
}
public function update(Request $request, string $id)
    {
        $barang = Barang::find($id);
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;

        $barang->save();
        return redirect('/barang')->with('success', 'Barang berhasil diperbarui');
        // $request->validate([
        //     'nama_barang' => 'required',
        //     'harga' => 'required|numeric',
        //     'stok' => 'required|integer',
        //     // Sesuaikan dengan field yang Anda butuhkan
        // ]);

        // $barang = Barang::findOrFail($id);
        // $barang->update($request->all());
        
        // return redirect('/barang')->with('success', 'Barang berhasil diperbarui');
    }
public function destroy($id)
{
    // Cari data berdasarkan ID
    $barang = Barang::findOrFail($id);
    
    // Hapus data
    $barang->delete();
    
    // Redirect dengan pesan sukses
    return redirect('/barang')->with('success', 'Data barang berhasil dihapus');
}

}
