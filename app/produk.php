<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produk';

    public $fillable =
        [
            'nama_produk',
            'harga_produk',
            'deskripsi_produk',
            'jenis_produk',

        ];
}
