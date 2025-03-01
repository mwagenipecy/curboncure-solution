<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('test',function(){
    return view('demo');
});

Route::get('test2',function(){
    return view('about');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.welcome');
    })->name('dashboard');
});



Route::get('welcome',function(){
    return view('frontend.welcome');
})->name('home');


Route::get('about',function(){
    return view('frontend.about');
})->name('about');


Route::get('service',function(){
    return view('frontend.service');
})->name('service');


Route::get('contact',function(){
    return view('frontend.contact');
})->name('contact');
