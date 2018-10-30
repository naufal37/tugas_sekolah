<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\produk;
//use App\Http\Request;

class produkcontroller extends Controller
{
    public function produk()
    {
        $produk_list = produk::all()->sortBy('id');

        $jumlah_produk = produk::all()->count();

        return view('produk/produk',compact('produk_list','jumlah_produk')) ;
    }
    public function tambah()
    {

        return view('produk/create');
    }
    public function store(Request $request)
    {

        produk::create($request->all());
        return redirect('produk');
    }

    public function show($id)
    {
        $produk = produk::findOrFail($id);
        return view('produk/detail',compact('produk')) ;
    }
}
