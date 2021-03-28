<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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


Route::get('/', [CustomerController::class, 'home'])->name('home');
Route::get('/AddCustomer', [CustomerController::class, 'customer']);
Route::post('/AddCustomer', [CustomerController::class, 'store'])->name('add.customer');
Route::get('/EditCustomer/{id}', [CustomerController::class, 'edit_customer'])->name('edit.customer');
Route::post('/UpdateCustomer/{id}', [CustomerController::class, 'update_customer'])->name('update.customer');
Route::get('/Delete/{id}', [CustomerController::class, 'delete'])->name('delete.customer');