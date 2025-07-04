<?php

use App\Http\Controllers\KainosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StraipsniaiController;
use App\Http\Controllers\CampainController;





Route::get('/', function () { return view('kontaktai'); })->name('kontaktai.index');



Route::get('/naujienos-ir-naudingi-straipsniai', [StraipsniaiController::class, 'index'])->name('straipsniai.index');
Route::get('/naujienos-ir-naudingi-straipsniai/{item}', [StraipsniaiController::class, 'show'])->name('straipsniai.show');

Route::get('/kainos', [KainosController::class, 'index'])->name('kainos.index');
Route::get('/kainos/{item}', [KainosController::class, 'show'])->name('kainos.show');


Route::get('/7', [CampainController::class, 'c7'])->name('campain.7');
Route::post('/7', [CampainController::class, 'c7Post'])->name('campain.7.post');
