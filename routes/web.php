<?php
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
// Route::get('/', 'AppointmentController@index');
// Route::post('/book', 'AppointmentController@store');
Route::get('appointment/index', [AppointmentController::class, 'index'])->name('appointment.index');
Route::get('get/admitted/university', [AppointmentController::class, 'get_admitted_university'])->name('get.admitted.university');
Route::get('discover/future/college', [AppointmentController::class, 'discover_future_college'])->name('discover.future.college');
Route::get('enquery/form', [AppointmentController::class, 'enquery_form'])->name('enquery.form');
Route::post('/book', [AppointmentController::class, 'store']);

// ====for navbar pages start====
Route::get('overseas/studies', [FrontendController::class, 'overseas_studies'])->name('overseas.studies');
Route::get('schooling/visa', [FrontendController::class, 'schooling_visa'])->name('schooling.visa');
Route::get('ielts', [FrontendController::class, 'ielts'])->name('ielts');

// ====for navbar pages end====
// ====for footer pages start====
Route::get('privacy/policy', [FrontendController::class, 'privacy_policy'])->name('privacy.policy');
// ====for footer pages end====

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
