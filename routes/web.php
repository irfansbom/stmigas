<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\UserController;
use App\Models\Survey;
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
    $date = date('d F y');
    return view('cover', compact('date'));
});

Route::middleware(['auth'])->group(function () {
    //
    // Route::get('/', [HomeController::class, 'index']);
    Route::get('dashboard', [HomeController::class, 'index']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile/store', [ProfileController::class, 'store']);
    Route::post('/profile/ubahpassword', [ProfileController::class, 'ubahpassword']);


    Route::get('/form', [SurveyController::class, 'create']);
    Route::post('/storeform', [SurveyController::class, 'store']);

    Route::get('/form-edit/{id}', [SurveyController::class, 'show']);
    Route::get('/form-print/{id}', [SurveyController::class, 'print']);
    Route::post('/updateform/{id}', [SurveyController::class, 'update']);
    Route::post('/hapusform', [SurveyController::class, 'destroy']);

    Route::get('monitoring', [MonitoringController::class, 'index']);

    Route::get('user', [UserController::class, 'index']);
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::post('/user/resetpassword', [UserController::class, 'resetpassword']);

});

require __DIR__.'/auth.php';
