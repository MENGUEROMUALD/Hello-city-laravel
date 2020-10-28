<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('pages/welcome');
})->name('home');

Route::get('/a-propos',function(){
    return view('pages/apropos');
})->name('apropos');
