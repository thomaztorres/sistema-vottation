<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnqueteController;
use App\Http\Controllers\VotationController;

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

Route::resource('enquetes', EnqueteController::class);

Route::resource('votation', VotationController::class);

Route::get('/', function () {
    return redirect('/enquetes');
});