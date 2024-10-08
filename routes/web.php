<?php

use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\ProfileController;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $slides = Slider::all();
    $testimonials = Testimonial::all();

    return view('frontend.home',compact('slides','testimonials'));
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

Route::controller(SliderController::class)->middleware(['auth','verified'])->group(function (){
    Route::get('/sliderIndex','index');
    Route::post('/saveSlider','storeslider')->name('slider.store');
    Route::post('/sliderUpdate','updateslider')->name('slider.update');
    Route::get('/deleteSlider/{id}','deleteslider')->name('slider.delete');
});

Route::controller(SettingsController::class)->middleware(['auth','verified'])->group(function (){
    Route::get('/settingIndex','index');
    Route::post('/settingUpdate','updatesetting')->name('setting.update');
});


Route::controller(TestimonialController::class)->middleware(['auth','verified'])->group(function (){
    Route::get('/TestimonialIndex','index');
    Route::post('/saveTestimonial','storeTestimonial')->name('Testimonial.store');
    Route::post('/TestimonialUpdate','updateTestimonial')->name('Testimonial.update');
    Route::get('/deleteTestimonial/{id}','deleteTestimonial')->name('Testimonial.delete');
});


require __DIR__.'/auth.php';
