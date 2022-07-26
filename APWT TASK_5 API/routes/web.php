<?php
use App\Http\Controllers\loginController;
use App\Http\Controllers\MenController;
use Illuminate\Support\Facades\Route;


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




// Delivery routes


// login routes
Route::get('/',[loginController::class, 'login'])->name('login');
 Route::get('/registration',[loginController::class, 'registration'])->name('registration');

 Route::post('/',[loginController::class, 'loginSubmit'])->name('login');
 Route::get('/logout',[loginController::class,'logout'])->name('logout');
 Route::post('/registration',[loginController::class, 'registrationSubmit'])->name('registration');

 //home

 Route::get('/index',[MenController::class, 'index'])->name('index');



// //Profile rotues

Route::get('/profile',[loginController::class, 'profile'])->name('profile')->middleware('login');
Route::get('/editprofile',[loginController::class, 'editprofile'])->name('editprofile');
Route::post('/editprofile',[loginController::class, 'editprofileSubmitted'])->name('editprofile');

//Add delivery men

Route::get('/allDeliveryBoys',[MenController::class, 'view'])->name('view')->middleware('login');
Route::get('/deliverydelete{id}',[MenController::class, 'deliverydelete'])->name('deliverydelete');

// Route::get('/addDelivery',[DeliveryController::class, 'addDelivery'])->name('addDelivery');
// Route::post('/addDelivery',[DeliveryController::class, 'addDeliverySubmitted'])->name('addDelivery');

// Route::get('/deliverylist',[DeliveryController::class, 'deliverylist'])->name('deliverylist');


