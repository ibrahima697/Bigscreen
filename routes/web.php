<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;

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
Route::get('/', [FrontController::class, 'index']);
Route::get('/url', [FrontController::class, 'url']);
Route::get('/answer/{url}', [FrontController::class, 'answers']);


Route::prefix('administration')->name('administration.')->middleware('auth')->group(function (){
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/survey', [AdminController::class, 'survey']);
    Route::get('/answers', [AdminController::class, 'answers']);
});

Route::resource('answer', AnswerController::class);


require __DIR__.'/auth.php';



