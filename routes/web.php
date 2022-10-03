<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrajetController;

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

Route::get('/', [App\Http\Controllers\TrajetController::class, 'north'])->name('north');
Route::get('/trajet/{id}/',[App\Http\Controllers\TrajetController::class, 'trajet'])->name('trajet');
Route::get('/trajet', function () {
    return redirect('/');
});
