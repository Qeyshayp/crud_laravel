<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() //ini namanya methode
    {
        $barangs = barang::all();
        return view('barang', compact('barangs'));
    }
    public function edit()
    {
        return view('barang.edit');
    }

}
