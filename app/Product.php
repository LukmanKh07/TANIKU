<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
        'id_user', 'id_market', 'nama_produk','gambar','harga_produk','stok','created_at','updated_at'
    ];
}
