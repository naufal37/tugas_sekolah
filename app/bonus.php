<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bonus extends Model
{
    public $table = 'bonus';
    public $primaryKey = 'id_bonus';

    public $fillable=
        [
            'id_bonus',
            'bonus',
        ];
    public function produk()
    {
        return $this->belongsTo('App\produk','id_bonus');
    }
}
