<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about extends Controller
{


    public function about()
    {
        $halaman = 'about';
        return view('pages.about',compact('halaman'));
    }


}
