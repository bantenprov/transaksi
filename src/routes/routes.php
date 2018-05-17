<?php

Route::group(['prefix' => 'transaksi'], function() {
    Route::get('demo', 'Bantenprov\Transaksi\Http\Controllers\TransaksiController@demo');
});
