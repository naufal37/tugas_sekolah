<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alamat extends Controller
{
    public function alamat_rumah()
    {
        return 'Gang Bali';
    }
    public function alamat_asli()
    {
        $url = route('alamat-rumah');
        $link = '<a href="'.$url.'"> Ke alamat </a>';
        return $link ;
//            redirect()->route('alamat-rumah');
    }
}
