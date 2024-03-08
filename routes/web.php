<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin\UserController;
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
Route::get('/superadmin/login', function () {
    return view('superadmin.login');
});


Route::get('/superadmin/dashboard', function () {
    return view('superadmin.dashboard');
});

Route::get('/superadmin/travel-requests', function () {
    return view('superadmin.request');
});

Route::get('/superadmin/travel-orders', function () {
    return view('superadmin.travel_orders');
});


Route::get('/superadmin/employee', function () {
    return view('superadmin.employee');
});


Route::get('/superadmin/divisions', function () {
    return view('superadmin.division');
});


Route::get('/superadmin/officials', function () {
    return view('superadmin.official');
});

/*Route::get('/superadmin/users', function () {
    return view('superadmin.users');
});*/
Route::get('/superadmin/users', [UserController::class, 'show']);
Route::post('/superadmin/users', [UserController::class, 'store']);


Route::get('/superadmin/settings/position', function () {
    return view('superadmin.position');
});

Route::get('/superadmin/settings/role', function () {
    return view('superadmin.role');
});

