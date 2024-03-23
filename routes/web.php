<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\InteractionsController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\PlaylistSongController;

Route::get('/user', [UserController::class, 'index']);
Route::get('/store', [UserController::class, 'store']);

Route::get('/artist', [ArtistController::class, 'index']);
Route::get('/store-artist', [ArtistController::class, 'store']);


Route::get('/album', [AlbumController::class, 'index']);
Route::get('/store-album', [AlbumController::class, 'store']);


Route::get('/song', [SongController::class, 'index']);
Route::get('/store-song', [SongController::class, 'store']);


Route::get('/interaction', [InteractionsController::class, 'index']);
Route::get('/create-interaction', [InteractionsController::class, 'store']);


Route::get('/playlist', [PlaylistController::class, 'index']);
Route::get('/create-playlist', [PlaylistController::class, 'store']);

Route::get('/playlist-song', [PlaylistSongController::class, 'index']);
Route::get('/create-playlist-song', [PlaylistSongController::class, 'store']);
