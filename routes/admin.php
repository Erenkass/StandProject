<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\WorkController;

Route::group(['prefix'=>'admin','middleware'=>'auth'],function () {

    Route::get('/', [DashboardController::class, 'index'])->name('adminIndex');
    Route::get('/slider',[\App\Http\Controllers\Admin\SliderController::class,'index'])->name('slider.index');
    Route::get('/slider/create',[\App\Http\Controllers\Admin\SliderController::class,'create'])->name('slider.create');
    Route::get('/slider/{id}/edit',[\App\Http\Controllers\Admin\SliderController::class,'edit'])->name('slider.edit');
    Route::post('/slider/store',[\App\Http\Controllers\Admin\SliderController::class,'store'])->name('slider.store');
    Route::put('/slider/{id}/update',[\App\Http\Controllers\Admin\SliderController::class,'update'])->name('slider.update');
    Route::delete('/slider/{id}/delete',[\App\Http\Controllers\Admin\SliderController::class,'delete'])->name('slider.delete');
    Route::post('/slider-status/update', [\App\Http\Controllers\Admin\SliderController::class, 'status'])->name('slider.status');


    Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
    Route::post('/contact/update',[ContactController::class,'update'])->name('contact.update');

    Route::get('/about',[AboutController::class,'index'])->name('about.index');
    Route::get('/about/create',[AboutController::class,'create'])->name('about.create');
    Route::get('/about/{id}/edit',[AboutController::class,'edit'])->name('about.edit');
    Route::post('/about/store',[AboutController::class,'store'])->name('about.store');
    Route::put('/about/{id}/update',[AboutController::class,'update'])->name('about.update');
    Route::delete('/about/{id}/delete',[AboutController::class,'delete'])->name('about.delete');

    Route::get('/service',[ServiceController::class,'index'])->name('service.index');
    Route::get('/service/create',[ServiceController::class,'create'])->name('service.create');
    Route::get('/service/{id}/edit',[ServiceController::class,'edit'])->name('service.edit');
    Route::post('/service/store',[ServiceController::class,'store'])->name('service.store');
    Route::put('/service/{id}/update',[ServiceController::class,'update'])->name('service.update');
    Route::delete('/service/{id}/delete',[ServiceController::class,'delete'])->name('service.delete');

    Route::get('/work',[WorkController::class,'index'])->name('work.index');
    Route::get('/work/create',[WorkController::class,'create'])->name('work.create');
    Route::get('/work/{id}/edit',[WorkController::class,'edit'])->name('work.edit');
    Route::post('/work/store',[WorkController::class,'store'])->name('work.store');
    Route::put('/work/{id}/update',[WorkController::class,'update'])->name('work.update');
    Route::delete('/work/{id}/delete',[WorkController::class,'delete'])->name('work.delete');

});
