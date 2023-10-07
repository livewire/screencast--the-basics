<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Todos;
use App\Livewire\ShowPosts;
use App\Livewire\Counter;

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

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/posts', ShowPosts::class);
