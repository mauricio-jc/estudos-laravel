<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;

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
});

Route::get('/clients', [ClientsController::class, 'index'])->name('clients');
Route::get('/clients/add', [ClientsController::class, 'add'])->name('clients.add');
Route::post('/clients', [ClientsController::class, 'store'])->name('clients.store');
