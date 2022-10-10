<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ScreenController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
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

Route::view('admin.index', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
    /* Route::get('logout', LogoutController::class)
        ->name('logout'); */
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::get('logout', LogoutController::class)
        ->name('logout');
});
 Route::middleware(['auth'])->group(function () {
    Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('questions', [AdminController::class, 'getQuestions'])->name('admin.questions');
    Route::get('admin/answers', [AdminController::class, 'getAnswers'])->name('admin.answers');


    
}); 
Route::get('/', [ScreenController::class, 'index'])->name('screens.index');

Route::get('poll', function () {
    return redirect()-> route('screens.index');
})->name('poll');
Route::get('screens/poll', [ScreenController::class, 'getPoll'])->name('screens.answers');

Route::get('/index', [ScreenController::class, 'createPoll']);
Route::post('/store', [ScreenController::class, 'store'])->name('store');

Route::get('screens/url', [ScreenController::class, 'getPoll'])->name('screens.url');
/* oute::get('poll', function () {
    return view('screens.index');
}); */
