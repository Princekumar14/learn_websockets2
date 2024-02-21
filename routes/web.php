<?php

use App\Http\Controllers\TestWebsocketController;
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
Route::get('test',[TestWebsocketController::class, 'testwebsocket']);
Route::get('private',[TestWebsocketController::class, 'privatewebsocket']);
Route::get('/checking', function () {
    return view('checkingWebsocket');
});
Route::get('/checkingprivate', function () {
    return view('checkingPrivateWebsocket');
});
Route::get('/adminpage', function () {
    return view('adminpage');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

