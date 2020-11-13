<?php
use Illuminate\Support\Facades\Route;

Route::view('/','pages/welcome')->name('home');

Route::view('/a-propos','pages/apropos')->name('apropos');
