<?php

use App\Http\Controllers\Examinee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('examinee', Examinee::class);
