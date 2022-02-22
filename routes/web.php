<?php

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



Route::get('/', function () {
    return view('home.index');
});
Route::get('/Crustaceans', function () {
    return view('home.Crustaceans');
});
Route::get('/Cephalopodes', function () {
    return view('home.Cephalopodes');
});
Route::get('/Others', function () {
    return view('home.Others');
});

Route::get('/about', function () {
    return view('home.about');
});


Route::get('/products', function () {
    return view('home.products');
});

Route::get('/contact-us', function () {
    return view('home.contact');
});

Route::get('/import-and-export', function () {
    return view('home.import-and-export');
});

Route::get('/quality-and-technology', function () {
    return view('home.quality-and-technology');
});


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('auth');



/* Courier Service Manage */

Route::get('courier_service/list', [App\Http\Controllers\CourierServiceController::class, 'index'])->name('courier_service.list')->middleware('auth');
Route::get('courier_service/new', [App\Http\Controllers\CourierServiceController::class, 'new'])->name('courier_service.new')->middleware('auth');
Route::post('courier_service/store', [App\Http\Controllers\CourierServiceController::class, 'store'])->name('courier_service.store')->middleware('auth');
Route::get('courier_service/edit/{id}', [App\Http\Controllers\CourierServiceController::class, 'edit'])->name('courier_service.edit')->middleware('auth');
Route::post('courier_service/update/{id}', [App\Http\Controllers\CourierServiceController::class, 'update'])->name('courier_service.update')->middleware('auth');
Route::get('courier_service/delete/{id}', [App\Http\Controllers\CourierServiceController::class, 'delete'])->name('courier_service.delete')->middleware('auth');


/* Order management */

Route::get('order/list', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.list')->middleware('auth');
Route::get('order/new', [App\Http\Controllers\OrderController::class, 'new'])->name('orders.new')->middleware('auth');
Route::post('order/store', [App\Http\Controllers\OrderController::class, 'store'])->name('orders.store')->middleware('auth');
Route::get('order/edit/{id}', [App\Http\Controllers\OrderController::class, 'edit'])->name('orders.edit')->middleware('auth');
Route::post('order/update/{id}', [App\Http\Controllers\OrderController::class, 'update'])->name('orders.update')->middleware('auth');
Route::get('order/delete/{id}', [App\Http\Controllers\OrderController::class, 'delete'])->name('orders.delete')->middleware('auth');



Route::get('track_order', [App\Http\Controllers\HomeController::class, 'track_order'])->name('orders.track_order')->middleware('auth');
Route::post('search_track_order', [App\Http\Controllers\HomeController::class, 'search_track_order'])->name('orders.search_track_order')->middleware('auth');


Route::get('customer/customer_orders',[App\Http\Controllers\UserController::class,'orders'])->name('user.orders')->middleware('auth');

Route::post('contact/submit',[App\Http\Controllers\SubmitController::class,'store_contact_us'])->name('contact.submit');

Route::post('feedback/submit',[App\Http\Controllers\SubmitController::class,'store_feedback_form'])->name('feedback.submit');
require __DIR__.'/auth.php';


