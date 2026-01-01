<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/virtual_machine', 'App\Http\Controllers\VirtualMachineController')->only(['index']);
