<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
 use App\Models\Suplier;

class ItemController extends Controller
{
   public function index()
{
    $item = Item::with('suplier')->get();
    return view('item.index', compact('item'));
}

 public function store(Request $request)
{
    $request->validate([
        'nama_item' => 'required',
        'jumlah_item' => 'required',
        'harga' => 'required',
        'suplier_id' => 'required'
    ]);

    Item::create($request->all());

    return redirect('/item')->with('success', 'Data berhasil ditambahkan');
}
   

public function create()
{
    $suplier = Suplier::all();
    return view('item.tambah', compact('suplier'));
}


}