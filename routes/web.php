<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', fn() => view('landing'));
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');