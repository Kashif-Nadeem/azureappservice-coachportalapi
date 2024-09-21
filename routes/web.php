<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-details', function () {
    return response()->json(['message' => 'User details accessed successfully!']);
});

