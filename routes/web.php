<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd("TEST");
    return view('welcome');
});
