<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;



class Suplier extends Model
{
    protected $table = 'suplier';

    protected $fillable = ['nama', 'alamat'];

    public function items()
{
    return $this->hasMany(Item::class);
}
}