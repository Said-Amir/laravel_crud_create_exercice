<?php

use App\Http\Controllers\BibliothequeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Bibliotheques
Route::get('/bibliotheques', [BibliothequeController::class, 'index'])->name('bibliotheque');
Route::post('/bibliotheques/{id}/destroy', [BibliothequeController::class, 'destroy']);
Route::get('/bibliotheques/{id}/edit', [BibliothequeController::class, 'edit']);
Route::post('/bibliotheques/{id}/update', [BibliothequeController::class, 'update']);
Route::get('/bibliotheques/create', [BibliothequeController::class, 'create']);
Route::post('/bibliotheques/store', [BibliothequeController::class, 'store']);

// Livres
Route::get('/livres', [LivreController::class, 'index'])->name('livre');
Route::post('/livres/{id}/destroy', [LivreController::class, 'destroy']);
Route::get('/livres/{id}/edit', [LivreController::class, 'edit']);
Route::post('/livres/{id}/update', [LivreController::class, 'update']);
Route::get('/livres/create', [LivreController::class, 'create']);
Route::post('/livres/store', [LivreController::class, 'store']);

// Images
Route::get('/images', [ImageController::class, 'index'])->name('image');
Route::post('/images/{id}/destroy', [ImageController::class, 'destroy']);
Route::get('/images/{id}/edit', [ImageController::class, 'edit']);
Route::post('/images/{id}/update', [ImageController::class, 'update']);
Route::get('/images/create', [ImageController::class, 'create']);
Route::post('/images/store', [ImageController::class, 'store']);

// Users
Route::get('/users', [UserController::class, 'index'])->name('user');
Route::post('/users/{id}/destroy', [UserController::class, 'destroy']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::post('/users/{id}/update', [UserController::class, 'update']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);