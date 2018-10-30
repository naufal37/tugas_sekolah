<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/29/18
 * Time: 7:44 PM
 */
?>

@extends('template')
@section('main')
    <div id="produk">
        <h2> Detail Produk</h2>

        <table class="table table-striped">
            <tr>
                <th> Nama Produk</th>
                <td> {{$produk->nama_produk}}</td>
            </tr>
            <tr>
                <th> Harga Produk</th>
                <td>{{$produk->harga_produk}}</td>
            </tr>
            <tr>
                <th> Deskripsi Produk</th>
                <td>{{$produk->deskripsi_produk}}</td>
            </tr>
            <tr>
                <th> Jenis Produk</th>
                <td>{{$produk->jenis_produk}}</td>
            </tr>
        </table>
    </div>
@stop