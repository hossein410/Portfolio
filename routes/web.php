<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FormController;
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

Route::get('/admin',[FormController::class,'index'])->name('contact.form');

Route::post('/admin', [FormController::class, 'submitForm'])->name('contact.submit');
