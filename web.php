<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeluarMasukBarangController;

// Arahkan route / ke halaman index
Route::get('/', function () {
    return redirect('/KeluarMasukBarang');
});

// Resource route
Route::resource('KeluarMasukBarang', KeluarMasukBarangController::class);
