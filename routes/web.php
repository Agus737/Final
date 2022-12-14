<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorBD;

Route::get('/', function () {
    return view('welcome');
});

Route::get('alumno',[controladorBD::class,'index'])->name('alumno.index');
Route::post('alumno', [controladorBD::class,'store'])->name('alumno.store');
Route::delete('alumno/{id}',[controladorBD::class,'destroy'])->name('alumno.destroy');
Route::put('alumno/{id}',[controladorBD::class,'update'])->name('alumno.update');