<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('blog_single' ,function(){
    return view('blog_single');
})->name('blog_single');
Route::get('portfolio' ,function(){
    return view('portfolio');
})->name('portfolio');
Route::get('error' ,function(){
    return view('error');
})->name('error');
Route::get('contact' ,function(){
    return view('contact');
})->name('contact');





