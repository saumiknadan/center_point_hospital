<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;

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
// Landing Page
Route::get('/',[HomeController::class,'index']);

// Admin Page
Route::get('/home',[HomeController::class,'redirect'])->
    middleware('auth','verified');

    // Email verification
    // Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Doctor
Route::resource('doctors', DoctorController::class);
Route::get('doctor-status{doctor}', [DoctorController::class, 'change_status']);

//Appointment
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

// Show Appointment
Route::get('/showappointment',[DoctorController::class,'showappointment']);
Route::get('/approve/{id}',[DoctorController::class,'approved']);
Route::get('/decline/{id}',[DoctorController::class,'declined']);
Route::get('/emailview/{id}',[DoctorController::class,'emailview']);

require __DIR__.'/auth.php';