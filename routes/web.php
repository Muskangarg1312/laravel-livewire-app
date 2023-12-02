<?php

use App\Livewire\ShowBlog;
use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('servicePage');
Route::get('/service/{id}', ShowService::class)->name('service');
Route::get('/team', ShowTeamPage::class)->name('teamPage');
Route::get('/blog', ShowBlog::class)->name('blog');
