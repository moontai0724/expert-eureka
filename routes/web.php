<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', [PostController::class, 'listAll'])->name('index');
Route::get('/topics/{topicId}', [PostController::class, 'list'])->name('list');

Route::get('/create/{topicId?}', [PostController::class, 'create'])->middleware('auth')->name('create');

Route::post('/create', [PostController::class, 'store'])->middleware('auth');

Route::get('/post/{post}', [PostController::class, 'show'])->name('detail');
Route::get('/respond/{post}', [PostController::class, 'respond'])->middleware('auth')->name('respond');
Route::post('/respond/{post}', [PostController::class, 'saveResponse'])->middleware('auth');

Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate']);
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'store']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
});
Route::get('/login', function () { return Redirect::route('auth.login'); })->name('login');
