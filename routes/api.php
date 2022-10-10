<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/information-category', [App\Http\Controllers\Api\InformationCategoryController::class, 'index'])->name('information-category.index');
Route::get('/information', [App\Http\Controllers\Api\InformationController::class, 'index'])->name('information.index');
Route::get('/agenda', [App\Http\Controllers\Api\AgendaController::class, 'index'])->name('agenda.index');
Route::get('/gallery', [App\Http\Controllers\Api\GalleryController::class, 'index'])->name('gallery.index');
