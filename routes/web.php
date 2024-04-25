<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Menu;


Route::get('/', Home::class)
    ->name('home');

Route::get('about', About::class)
    ->name('about');

Route::get('menu', Menu::class)
    ->name('menu');

