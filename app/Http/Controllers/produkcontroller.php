<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use Validator;
class produkcontroller extends Controller
{
    public function homepage()
    {
        return view('pages/homepage');
    }

    public function about()
    {
        return view('pages/about');
    }

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
        $input = $request->all();
        $validator = Validator::make($input,
            [
                'nama_produk'=>'required|string|min:4|unique:produk,nama_produk',
                'harga_produk' => 'required|integer|',
                'deskripsi_produk' => 'required|string|min:10',
                'jenis_produk' => 'required|in:Hewani,Nabati',
                'berlaku_sampai'=>'required|date',

            ]);
        if ($validator->fails())
        {
            return redirect('produk/tambah')->withInput()->withErrors($validator);
        }

        produk::create($input);
        return redirect('produk');
    }

    public function show($id)
    {
        $produk = produk::findOrFail($id);
        return view('produk/detail',compact('produk')) ;
    }

    public function edit($id,Request $request)
    {
        $produk = produk::findOrFail($id);
        return view('produk/edit',compact('produk'));
    }
    public function update($id,Request $request)
    {
        $produk = produk::findOrFail($id);

        $input = $request->all();
        $validator = Validator::make($input,
            [
                'nama_produk'=>'required|string|min:4|unique:produk,nama_produk,'.$request->input('id'),
                'harga_produk' => 'required|integer|',
                'deskripsi_produk' => 'required|string|min:10',
                'jenis_produk' => 'required|in:Hewani,Nabati',
                'berlaku_sampai'=>'required|date',

            ]);
        if ($validator->fails())
        {
            return redirect('produk/'.$id.'/edit')->withInput()->withErrors($validator);
        }


        $produk->update($request->all());
        return redirect('produk');
    }

    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();
        return redirect('produk');
    }
}

//    public function datemutator()
//    {
//        $produk = produk::findOrFail(3);
////        return 'Tinggal '. ($produk->berlaku_sampai->age).' Tahun Lagi';
//    }

//    public function test(){}
//}



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
