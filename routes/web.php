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
  return view('home');
});

Route::get('/users/register', [UserController::class, 'create'])
  ->middleware('guest');

Route::get('/users/login', [UserController::class, 'login'])
  ->middleware('guest');

Route::get('/jobs', [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create']);

Route::get('/jobs/manage', [JobController::class, 'manage']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

Route::get('/jobs/{job}', [JobController::class, 'show']);