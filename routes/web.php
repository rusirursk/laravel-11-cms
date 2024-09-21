<?php

use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\ProfileController;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $slides = Slider::all();

    return view('frontend.home',compact('slides'));
});

Route::get('/about', function(){
    return view('frontend.about');
});

Route::get('/service', function(){
    return view('frontend.service');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(SliderController::class)->group(function (){
    Route::get('/sliderIndex','index');
    Route::post('/saveSlider','storeslider')->name('slider.store');
    Route::post('/sliderUpdate','updateslider')->name('slider.update');
    Route::get('/deleteSlider/{id}','deleteslider')->name('slider.delete');
})->middleware(['auth','verified']);

Route::controller(SettingsController::class)->group(function (){
    Route::get('/settingIndex','index');
    Route::post('/settingUpdate','updatesetting')->name('setting.update');
});



require __DIR__.'/auth.php';
