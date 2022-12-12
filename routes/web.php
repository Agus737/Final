<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorBD;

Route::get('/', function () {
    return view('welcome');
});

Route::get('alumno',[controladorBD::class,'index'])->name('alumno.index');
Route::post('alumno', [controladorBD::class,'store'])->name('alumno.store');