<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd('test');
    return view('welcome');
});
