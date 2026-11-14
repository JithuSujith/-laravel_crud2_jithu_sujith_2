<?php
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class,'home'])->name('home');

Route::resource('recipes', RecipeController::class);
