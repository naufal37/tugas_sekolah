<?php
Route::group(['middleware'=>['web']],function () {
    Route::get('/', 'produkcontroller@homepage');
    Route::get('about', 'produkcontroller@about');
    Route::get('produk', 'produkcontroller@produk');
    Route::get('produk/tambah', 'produkcontroller@tambah');
    Route::post('produk', 'produkcontroller@store');
    Route::get('produk/{produk}', 'produkcontroller@show');
    Route::get('produk/{produk}/edit', 'produkcontroller@edit');
    Route::patch('produk/{produk}', 'produkcontroller@update');
    Route::delete('produk/{produk}', 'produkcontroller@destroy');
})
?>


