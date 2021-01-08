<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    //
    protected $table = 'markets';

    protected $fillable = [
        'nama_market', 'alamat_market', 'kontak_market'
    ];

}
