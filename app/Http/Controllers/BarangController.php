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
    
    public function edit($id) //nambahin ini
{
    $barang = Barang::findOrFail($id);
    return view('barang.edit', compact('barang'));
}


}
