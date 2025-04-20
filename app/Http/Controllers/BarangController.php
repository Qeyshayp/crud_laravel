<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = \App\Models\Barang::all();
        return view('barang', compact('barangs'));
    }
    
    public function edit()
    {
        return view('barang.edit');
    }

}
