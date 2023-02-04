<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\InvoicesController;

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



Auth::routes();

Route::resource('/home', ShoppingController::class)->names('shopping')->middleware('auth');
Route::resource('/', ShoppingController::class)->names('shopping')->middleware('auth');

Route::post('/shopping/{id}', [ShoppingController::class, 'store'])->name('shopping.store');

Route::resource('/invoces', InvoicesController::class)->names('invoices')->middleware('auth');



