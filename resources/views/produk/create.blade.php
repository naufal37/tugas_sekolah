<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/28/18
 * Time: 5:37 AM
 */
?>
@extends('template')
@section('main')
    <div id="produk">
        <h2> Tambah Produk</h2>

        {!! Form::open(['url'=>'produk']) !!}
            <div class="form-group">
                {{--<label for="nama_produk" class="custom-control-label"> Nama Produk</label>--}}
                {!! Form::label('nama_produk','Nama Produk',['class'=>'custom-control-label']) !!}
                {{--<input name="nama_produk" id="nama_produk" type="text" class="form-control">--}}
                {!! Form::text('nama_produk',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {{--<label for="harga_produk" class="custom-control-label"> Harga Produk</label>--}}
                {!! Form::label('harga_produk','Harga Produk',['class'=>'custom-control-label']) !!}
                {{--<input name="harga_produk" id="harga_produk" type="text" class="form-control">--}}
                {!! Form::text('harga_produk',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {{--<label for="deskripsi_produk" class="custom-control-label"> Deskripsi Produk </label>--}}
                {!! Form::label('deskripsi_produk','Deskripsi Produk',['class'=>'custom-control-label']) !!}
                {{--<input name="deskripsi_produk" id="deskripsi_produk" type="text" class="form-control">--}}
                {!! Form::text('deskripsi_produk',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {{--<label for="jenis_produk" class="custom-control-label"> Jenis Produk</label>--}}
                {!! Form::label('jenis_produk','Jenis Produk',['class'=>'custom-control-label']) !!}
                <div class="custom-radio">
                    <label>{!! Form::radio('jenis_produk','Hewani') !!}Hewani</label>
                </div>
                <div class="custom-radio">
                    {{--<label><input name="jenis_produk" type="radio" value="nabati" id="jenis_produk">Nabati</label>--}}
                    <label>{!! Form::radio('jenis_produk','Nabati') !!}Nabati</label>
                </div>
            </div>
            <div class="form-group">
                {{--<input type="submit" class="btn btn-primary form-control" value="Tambah Produk">--}}
                {!! Form::submit('Tambah Produk',['class'=>'btn btn-primary form-control']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop