<?php

use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/driver', [DriverController::class, 'index']);
Route::get('/driver/create', [DriverController::class, 'create']);
Route::post('/driver/store', [DriverController::class, 'store'])->name('driver.store');
