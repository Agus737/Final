<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorBD;

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome',[controladorBD::class,'index'])->name('alumno.index');
Route::post('registro', [controladorBD::class,'store'])->name('alumno.store');