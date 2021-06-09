<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenesController;

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

Route::get('/', [ImagenesController::class, 'index'])->name('index');

Route::get('/test/fase1/{group}/', [ImagenesController::class, 'group1'])->name('fase1');

Route::get('/test/fase2/{style}/', [ImagenesController::class, 'group2Desc'])->name('fase2Desc');

Route::get('/test/fase-dos/{style}/', [ImagenesController::class, 'group2Asc'])->name('fase2Asc');

Route::get('/test/fase2info/{style}/', [ImagenesController::class, 'group2DescWithInfo'])->name('fase2DesInfo');

Route::get('/test/fase-dos-info/{style}/', [ImagenesController::class, 'group2AscWithInfo'])->name('fase2AsInfo');

Route::post('/result', [ImagenesController::class, 'fase1'])->name('results');

Route::post('/results/fase2', [ImagenesController::class, 'fase2Asc'])->name('resultsFase2Asc');

Route::post('/results', [ImagenesController::class, 'fase2Desc'])->name('resultsFase2Desc');