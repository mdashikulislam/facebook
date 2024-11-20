<?php

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
Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/calendar-calendly', \App\Livewire\Home::class)->name('calender');
//::get('calendar-calendly', \App\Livewire\Calendar::class)->name('calendar-calendly');
Route::get('thank-you',function (){
    return view('thank');
});
Route::get('simple',function (){
    return view('simple');
});
