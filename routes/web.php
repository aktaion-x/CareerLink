<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
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
    return dd('asd');
  return view('home');
});

Route::get('/about', function () {
  return view('about');
});

Route::get('/users/register', [UserController::class, 'create'])
  ->middleware('guest');

Route::get('/users/login', [UserController::class, 'login'])
  ->name('login')
  ->middleware('guest');

Route::post('/users/register', [UserController::class, 'store']);

Route::post('/users/login', [UserController::class, 'authenticate']);

Route::post('/users/logout', [UserController::class, 'logout'])
  ->middleware('auth');

Route::get('/jobs', [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create'])
  ->middleware('auth');

Route::get('/jobs/manage', [JobController::class, 'manage'])
  ->middleware('auth');

Route::get('/jobs/edit/{job}', [JobController::class, 'edit'])
  ->middleware('auth');

Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::post('/jobs', [JobController::class, 'store']);

Route::put('/jobs/{job}', [JobController::class, 'update']);

Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

Route::put('/jobs/activate/{job}', [JobController::class, 'activate']);

Route::put('/jobs/archive/{job}', [JobController::class, 'archive']);