<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowPosts;
use App\Livewire\CreatePost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/posts', ShowPosts::class);
Route::get('/posts/create', CreatePost::class);
