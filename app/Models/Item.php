<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Suplier;



class Item extends Model
{
    use HasFactory;
protected $fillable = [
    'nama_item',
    'jumlah_item',
    'harga',
    'suplier_id'
];
    public function suplier()
{
    return $this->belongsTo(Suplier::class);
}
}