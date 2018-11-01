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
            'berlaku_sampai',

        ];
    public $dates = ['berlaku_sampai'];

//    public function setNamaProdukAttribute($nama_produk)
//    {
//        $print = $this->attributes['nama_produk'] = strtolower($nama_produk);
//        return $print;
//    }

//    public function getNamaProdukAttribute($nama_produk)
//    {
//        return ucwords($nama_produk);
//
//    }

}
