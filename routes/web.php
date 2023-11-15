<?php

use App\Http\Controllers\FrontendController;
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
Route::get('/testapp', [FrontendController::class,'testapp']);
Route::get('/', [FrontendController::class, 'sidebar']);
Route::get('/index', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/news', [FrontendController::class, 'news']);
Route::get('/portfolio', [FrontendController::class, 'portfolio']);
Route::get('/service', [FrontendController::class, 'service']);
