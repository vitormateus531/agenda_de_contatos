<?php

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/insert-contact','App\Http\Controllers\InsertContactController@viewInsertContact')->middleware('auth')->name('insert-contact');
Route::get('/edit-contact','App\Http\Controllers\EditContactController@viewEditContact')->middleware('auth')->name('edit-contact');
Route::get('/edit-one-contact','App\Http\Controllers\EditContactController@viewEditOneContact')->middleware('auth')->name('edit-one-contact');


//-------------------- Redefinição de senha ------------------------------------ 

Route::post('/forgot-password','App\Http\Controllers\Auth\ForgotPasswordController@sendEmail')->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}','App\Http\Controllers\Auth\ResetPasswordController@viewReset')->middleware('guest')->name('password.reset');
Route::post('/reset-password','App\Http\Controllers\Auth\ResetPasswordController@reset')->middleware('guest')->name('password.update');

