<?php

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

// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Auth::routes();

Route::get('/admin/information-category', [App\Http\Controllers\Admin\InformationCategoryController::class, 'index'])->name('information-category.index');
Route::post('/admin/information-category', [App\Http\Controllers\Admin\InformationCategoryController::class, 'store'])->name('information-category.store');
Route::match(['put', 'patch'], '/admin/information-category/{id}', [App\Http\Controllers\Admin\InformationCategoryController::class, 'update'])->name('information-category.update');
Route::delete('/admin/information-category/{id}', [App\Http\Controllers\Admin\InformationCategoryController::class, 'destroy'])->name('information-category.destroy');

Route::get('/admin/gallery', [App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('gallery.index');
Route::post('/admin/gallery', [App\Http\Controllers\Admin\GalleryController::class, 'store'])->name('gallery.store');
Route::delete('/admin/gallery/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'destroy'])->name('gallery.delete');

Route::get('/admin/information', [App\Http\Controllers\Admin\InformationController::class, 'index'])->name('information.index');
Route::get('/admin/information/create', [App\Http\Controllers\Admin\InformationController::class, 'create'])->name('information.create');
Route::post('admin/information', [App\Http\Controllers\Admin\InformationController::class, 'store'])->name('information.store');
Route::get('/admin/information/manage', [App\Http\Controllers\Admin\InformationController::class, 'manage'])->name('information.manage');
Route::get('/admin/information/detail/{slug}', [App\Http\Controllers\Admin\InformationController::class, 'detail'])->name('information.detail');

Route::get('/admin/agenda', [App\Http\Controllers\Admin\AgendaController::class, 'index'])->name('agenda.index');
Route::post('/admin/agenda', [App\Http\Controllers\Admin\AgendaController::class, 'store'])->name('agenda.store');

Route::get('/admin/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile.index');
Route::get('/admin/profile/create', [App\Http\Controllers\Admin\ProfileController::class, 'create'])->name('profile.create');
Route::post('/admin/profile', [App\Http\Controllers\Admin\ProfileController::class, 'store'])->name('profile.store');

Route::get('/admin/partner', [App\Http\Controllers\Admin\PartnerController::class, 'index'])->name('partner.index');
Route::post('/admin/partner', [App\Http\Controllers\Admin\PartnerController::class, 'store'])->name('partner.store');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
