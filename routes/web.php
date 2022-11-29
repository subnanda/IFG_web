<?php

use App\Http\Controllers\EmailController;
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
Route::get('informasi-ifg/{name}', [FrontendController::class, 'informasi_ifg']);
Route::get('profile-ifg/{name}', [FrontendController::class, 'profile_ifg']);
Route::get('alur-pengajuan-ifg/{name}', [FrontendController::class, 'alur_pengajuan_ifg']);
Route::get('faq-ifg/{name}', [FrontendController::class, 'faq_ifg']);
Route::get('menu/{name}', [FrontendController::class, 'menu']);
Route::get('beranda/{name}', [FrontendController::class, 'index']);
Route::post('searching', [FrontendController::class, 'searching']);
Route::post('searching2', [FrontendController::class, 'searching2']);
Route::post('slider_card', [FrontendController::class, 'slider_card']);
Route::post('kirim-email', [EmailController::class, 'index']);
