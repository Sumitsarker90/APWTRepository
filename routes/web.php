<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[pagescontroller::class,'index'] )->name('home');

Route::get('/profile',[pagescontroller::class,'profile'])->name('profile');
Route::get('/service',[pagescontroller::class,'service'])->name('service');
Route::get('/contact',[pagescontroller::class,'contact'])->name('contact');
Route::get('/about',[pagescontroller::class,'about'])->name('about');
