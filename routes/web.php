<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::group(['middleware' => ['auth']], function(){
    Route::view('/', 'dashboard');
    Route::match(['get', 'post'], '/dashboard', function(){
        return view('dashboard');
    });
    Route::view('/pages/slick', 'pages.slick');
    Route::view('/pages/datatables', 'pages.datatables');
    Route::view('/pages/blank', 'pages.blank');

    Route::prefix('admin')->group(function(){

        Route::get('information-category', [App\Http\Controllers\Admin\InformationCategoryController::class, 'index'])->name('information-category.index');
        Route::post('information-category', [App\Http\Controllers\Admin\InformationCategoryController::class, 'store'])->name('information-category.store');
        Route::match(['put', 'patch'], 'information-category/{id}', [App\Http\Controllers\Admin\InformationCategoryController::class, 'update'])->name('information-category.update');
        Route::delete('information-category/{id}', [App\Http\Controllers\Admin\InformationCategoryController::class, 'destroy'])->name('information-category.destroy');

        Route::get('gallery', [App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('gallery.index');
        Route::post('gallery', [App\Http\Controllers\Admin\GalleryController::class, 'store'])->name('gallery.store');
        Route::delete('gallery/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'destroy'])->name('gallery.delete');

        Route::get('information', [App\Http\Controllers\Admin\InformationController::class, 'index'])->name('information.index');
        Route::get('information/create', [App\Http\Controllers\Admin\InformationController::class, 'create'])->name('information.create');
        Route::post('information', [App\Http\Controllers\Admin\InformationController::class, 'store'])->name('information.store');
        Route::get('information/manage', [App\Http\Controllers\Admin\InformationController::class, 'manage'])->name('information.manage');
        Route::get('information/detail/{slug}', [App\Http\Controllers\Admin\InformationController::class, 'detail'])->name('information.detail');
        Route::match(['put', 'patch'], 'information/{slug}', [App\Http\Controllers\Admin\InformationController::class, 'update'])->name('information.update');
        Route::delete('information/{id}', [App\Http\Controllers\Admin\InformationController::class, 'destroy'])->name('information.delete');

        Route::get('agenda', [App\Http\Controllers\Admin\AgendaController::class, 'index'])->name('agenda.index');
        Route::post('agenda', [App\Http\Controllers\Admin\AgendaController::class, 'store'])->name('agenda.store');

        Route::get('profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile.index');
        Route::get('profile/create', [App\Http\Controllers\Admin\ProfileController::class, 'create'])->name('profile.create');
        Route::post('profile', [App\Http\Controllers\Admin\ProfileController::class, 'store'])->name('profile.store');

        Route::get('partner', [App\Http\Controllers\Admin\PartnerController::class, 'index'])->name('partner.index');
        Route::post('partner', [App\Http\Controllers\Admin\PartnerController::class, 'store'])->name('partner.store');
    });
});
