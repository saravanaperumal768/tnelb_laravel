<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Mews\Captcha\Facades\Captcha;

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



Route::get('/', [IndexController::class, 'index'])->name('index');


Route::get('/captcha', function () {
    return Captcha::create();
})->name('captcha');

// Route::post('/login', function () {
//     return '1111';
// });

Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
});


// Route::get('/get-applicant-details', [LoginController::class, 'getApplicantDetails'])->name('get.applicant.details');

Route::get('/get-applicant-details', [LoginController::class, 'getApplicantDetails'])->name('get.applicant.details');


Route::post('/profile', [LoginController::class, 'profile'])->name('profile');
// Route::get('/profile',LoginController::class, 'profile')->name('profile');

Route::get('/applicants_detail/{applicant_id}', [LoginController::class, 'showApplicantDetails'])->name('applicants_detail');


Route::get('/secretary_table', [LoginController::class, 'secretary_table'])->name('secretary_table');


