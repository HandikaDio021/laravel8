<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplier;

class SupplierController extends Controller
{
    // tampil data
    public function index()
    {
        $suplier = Suplier::all();
        return view('suplier.index', compact('suplier'));
    }

    // form tambah
    public function tambah()
    {
        return view('suplier.tambah');
    }

    // simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Suplier::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/suplier')->with('success', 'Data berhasil ditambahkan');
    }
}