<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/work', function () {
    return view('work');
})->name('work');

Route::get('/capabilities', function () {
    return view('capabilities');
})->name('capabilities');

Route::get('/say-hi', function () {
    return view('say-hi');
})->name('say-hi');
