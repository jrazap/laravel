<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    $username = "jrazap";
    return view('users', compact('username'));
});

Route::post('users', function (Request $request) {
    return $request;
});

Route::get('users/{name}', function (string $name) {
    return $name;
});
