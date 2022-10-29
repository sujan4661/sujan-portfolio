<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

//home route*************** 

Route::get('/', [HomeController::class, 'home'])->name('home');

// pages routes***************

Route::get('/moreBlogs', [PageController::class, 'moreBlogs'])->name('moreBlogs');


// auth routes***************

Route::get('/logins', [AuthController::class, 'login'])->name('login');
Route::get('/registers', [AuthController::class, 'register'])->name('register');

// blog routes****************


// auth controllers

Route::get('/admin', [AuthController::class, 'login'])->name('login');
Route::get('/admin/register', [AuthController::class, 'register'])->name('register');

// admin panel routes

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
