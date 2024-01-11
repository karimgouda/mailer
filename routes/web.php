<?php

use App\Http\Controllers\SendMailController;
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

Route::prefix('/')->as('send.')->controller(SendMailController::class)->group(function (){
    Route::get('/','index')->name('index');
    Route::post('send_mail','sendMail')->name('sendMail');
});
