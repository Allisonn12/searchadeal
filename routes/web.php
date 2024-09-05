<?php

use App\Http\Controllers\Motor\MotorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Motor\CarTrackController;
use App\Http\Controllers\Legal\LegalInsuranceContoller;
use App\Http\Controllers\Business\BusinessController;
use App\Http\Controllers\Debt\DebtController;
use App\Http\Controllers\Motor\CarInsureController;
use App\Http\Controllers\Medical\MedicalController;
use App\Http\Controllers\Funeral\FuneralController;
// use App\Http\Controllers\Life\LifeController;
use App\Http\Controllers\Life\lifeController;



Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/motor', function(){
    return view('motor');
})->name('motor');


Route::get('/motor_form', [MotorController::class, 'submit'])->name('index');
Route::get('/car_track', [CarTrackController::class, 'index'])->name('index');
Route::get('/legal', [LegalInsuranceContoller::class, 'index'])->name('index');
Route::get('/business', [BusinessController::class, 'index'])->name('index');
Route::get('/debt', [DebtController::class, 'index'])->name('index');
Route::get('/car', [CarInsureController::class, 'index'])->name('index');
Route::get('/medical', [MedicalController::class, 'index'])->name('index');
Route::get('/funeral', [FuneralController::class, 'index'])->name('index');
Route::get('/life', [LifeController::class, 'index'])->name('index');

Route::post('/motor_form', [MotorController::class, 'submit'])->name('motor_form');
Route::post('/car_track', [CarTrackController::class, 'car_track'])->name('car_track');
Route::post('/legal', [LegalInsuranceContoller::class, 'submit'])->name('legal');
Route::post('/business', [BusinessController::class, 'submit'])->name('business');
Route::post('/debt', [DebtController::class, 'submit'])->name('debt');
Route::post('/car', [CarInsureController::class, 'submit'])->name('car');
Route::post('/medical', [MedicalController::class, 'submit'])->name('medical');
Route::post('/funeral', [FuneralController::class, 'submit'])->name('funeral');
Route::post('/life', [LifeController::class, 'submit'])->name('life');



