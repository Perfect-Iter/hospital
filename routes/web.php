<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;
use App\Http\Controllers\BookingController;

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
    return view('index');
});



Route::resources([
    'patients' => PatientController::class,
]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/appointment', [App\Http\Controllers\BookingController::class, 'create'])->name('appointment');
Route::post('/appointment', [App\Http\Controllers\BookingController::class, 'bookAppointment'])->name('appointent.bookAppointment');

Route::get('/appointment/{id}/edit', [App\Http\Controllers\BookingController::class, 'edit'])->name('appointment.edit');