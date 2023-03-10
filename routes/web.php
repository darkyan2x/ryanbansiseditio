<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FacilityController;
use \App\Http\Controllers\RolesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check()) {
        return view('home');
    } else {
        return view('auth.login');
    }
})->name('login');

Auth::routes();

