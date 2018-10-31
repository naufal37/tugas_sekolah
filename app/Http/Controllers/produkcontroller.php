<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\produk;
//use App\Http\Request;

class produkcontroller extends Controller
{
    public function produk()
    {
        $produk_list = produk::orderBy('id','asc')->Paginate(3);
        $jumlah_produk = produk::count();
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

    public function edit($id)
    {
        $produk = produk::findOrFail($id);
        return view('produk/edit',compact('produk'));
    }
    public function update($id,Request $request)
    {
        $produk = produk::findOrFail($id);
        $produk->update($request->all());
        return redirect('produk');
    }

    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();
        return redirect('produk');
    }

    public function test(){
//        $koleksi = produk::all()->first();
//        $koleksi = produk::all()->last();


//        $jumlah = $koleksi->count();
//        return 'Jumlah Data :'.$jumlah;

//        $koleksi = produk::all()->take(3);

//        $koleksi = produk::all()->pluck('nama_produk');
//        $koleksi = produk::all()->where('nama_produk','Jeruk');
//        $koleksi = produk::all()->whereIn('harga_produk',['9000','80000']);
//        $koleksi = produk::all()->whereIn('harga_produk',['9000','80000']);


//        $koleksi = produk::select('nama_produk','harga_produk')->take(2)->get();
//        $collection = $koleksi->toArray();
//        foreach ($koleksi as $produk)
//        {
//            echo $produk['nama_produk'].'-'.$produk['harga_produk'].'<br>';
//        }
//        return $koleksi;

//        $data =
//            [
//            ['nama_produk'=>'Mangga','harga_produk'=>'9000','deskripsi_produk'=>'Mangga Manis','jenis_produk'=>'Nabati'],
//            ['nama_produk'=>'Apel','harga_produk'=>'1000','deskripsi_produk'=>'Apel Manis','jenis_produk'=>'Nabati'],
//            ['nama_produk'=>'Jeruk','harga_produk'=>'2000','deskripsi_produk'=>'Jeruk Manis','jenis_produk'=>'Nabati'],
//            ];
//        $koleksi = collect($data);
//        $collection = $koleksi->toJson();
//        return $collection;

    }



}
