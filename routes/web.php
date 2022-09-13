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

Route::get('/controller/comments/random', [App\Http\Controllers\RandomController::class, "election"]
);

Route::get('/controller/comments/{time_value}', [App\Http\Controllers\GreetingController::class, "result"]
);

Route::get('/controller/comments/freeword/{message_value}',[App\Http\Controllers\FreewordController::class, "message"]
);
