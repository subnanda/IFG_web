<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index']);
Route::get('index', [FrontendController::class, 'index']);
Route::get('informasi', [FrontendController::class, 'informasi']);
Route::get('profil', [FrontendController::class, 'profil']);
Route::get('kontak', [FrontendController::class, 'kontak']);
Route::get('jalur_pelayanan', [FrontendController::class, 'jalur_pelayanan']);
Route::get('faq', [FrontendController::class, 'faq']);
Route::get('menu/{name}', [FrontendController::class, 'menu']);
