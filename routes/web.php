<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('ak.about', function () {
    return view('AK.about');
})->name('ak.about');

Route::get('ak.comingSoon', function () {
    return view('AK.comingSoon');
})->name('ak.comingSoon');

Route::get('ak.contact', function () {
    return view('AK.contact');
})->name('ak.contact');

Route::get('/ak',[ServiceController::class,'index'])->name('ak.index');
Route::get('/ak/service',[ServiceController::class,'service'])->name('ak.service');



 Route::get('Dash.index', function () {
     return view('Dashboard.index');
 })->name('Dash.index');
 Route::get('dsr', function () {
     return view('Dashboard.CreateService');
 });
