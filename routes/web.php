<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\TrainController;


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

Route::get('/', function () {
    return view('welcome');
})->name('guests.index');

Route::get('/trains', [TrainController::class, 'index'])->name('guests.trains.index');
Route::get('/trains/{train}', [TrainController::class, 'show'])->name('guests.trains.show');
