<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/home', 'home')->middleware(['auth', 'verified'])->name('home');
Route::view('/profile/edit', 'profile.edit')->middleware(['auth', 'verified'])->name('profile.edit');
Route::view('/profile/password', 'profile.password')->middleware(['auth', 'verified'])->name('profile.password');
Route::view('/profile/two-factor', 'profile.two-factor')->middleware(['auth', 'verified'])->name('profile.two-factor');
Route::view('/profile/recovery-code', 'auth.recovery-code')->name('profile.recovery-code');

Route::view('/libraries/datatables', 'libraries.datatables')->middleware(['auth', 'verified'])->name('libraries.datatables');

