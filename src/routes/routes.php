<?php

Route::group(['prefix' => '/'], function() {
    Route::resource('transaksi', 'Bantenprov\Transaksi\Http\Controllers\TransaksiController');
});
