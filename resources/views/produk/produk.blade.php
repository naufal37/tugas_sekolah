@extends('template')
@section('main')
<div class="produk">
    <h2> Daftar Produk </h2>

    @if (!empty($jumlah_produk))
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Deskripsi Produk</th>
                <th>Jenis Produk</th>
                <th>Pilihan</th>
            </tr>
            </thead>
            <tbody>
            @foreach($produk_list as $produk)
                <tr>
                <td>{{$produk->id}}</td>
                <td>{{$produk->nama_produk}}</td>
                <td>{{$produk->harga_produk}}</td>
                <td>{{$produk->deskripsi_produk}}</td>
                <td>{{$produk->jenis_produk}}</td>
                <td>{{link_to('produk/'.$produk->id,'Detail',['class'=>'btn btn-success btn-sm'])}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p> Tidak Ada Produk</p>
    @endif
    <div class="table-bottom">
        <div class="pull-left">
            <strong> Jumlah Produk : {{$jumlah_produk}}</strong>
        </div>
        <div class="pull-right">
            Pagination
        </div>
    </div>

    <div class="bottom-nav">
        <div>
            <a href="produk/tambah" class="btn btn-primary">Tambah <Produk></Produk></a>
        </div>
    </div>

</div>
@stop

@section('footer')
    @include('footer')
@stop