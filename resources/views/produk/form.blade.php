<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/30/18
 * Time: 9:04 PM
 */
?>
 <div class="form-group">
            {!! Form::label('nama_produk','Nama Produk',['class'=>'custom-control-label']) !!}
            {!! Form::text('nama_produk',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('harga_produk','Harga Produk',['class'=>'custom-control-label']) !!}

            {!! Form::text('harga_produk',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('deskripsi_produk','Deskripsi Produk',['class'=>'custom-control-label']) !!}

            {!! Form::text('deskripsi_produk',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('jenis_produk','Jenis Produk',['class'=>'custom-control-label']) !!}
            <div class="radio">
                <label>{!! Form::radio('jenis_produk','Hewani') !!}Hewani</label>
            </div>

            <div class="radio">
                <label>{!! Form::radio('jenis_produk','Nabati') !!}Nabati</label>
            </div>

        </div>

        <div class="form-group">
            {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
        </div>