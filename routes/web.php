<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/superadmin/dashboard', function () {
    return view('superadmin.dashboard');
});

Route::get('/superadmin/users', function () {
    return view('superadmin.users');
});

Route::get('/superadmin/settings/divisions', function () {
    return view('superadmin.divisions');
});

Route::get('/superadmin/settings/position', function () {
    return view('superadmin.position');
});

Route::get('/superadmin/settings/role', function () {
    return view('superadmin.role');
});