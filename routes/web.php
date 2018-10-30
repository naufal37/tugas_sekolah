<?php

Route::get('/','homepage@homepage');{

};

Route::get ('about','about@about');{

};

Route::get('asal', ['as'=>'alamat-rumah','uses'=>'alamat@alamat_rumah']);


Route::get('alamat','alamat@alamat_asli');

Route::get('produk','produkcontroller@produk');

Route::get('produk/tambah','produkcontroller@tambah');

Route::post('produk','produkcontroller@store');

Route::get('produk/{produk}','produkcontroller@show');

Route::get('produk/{produk}/edit','produkcontroller@edit');

Route::patch('produk/{produk}','produkcontroller@update');

Route::delete('produk/{produk}','produkcontroller@destroy');

?>