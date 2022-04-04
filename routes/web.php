<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;
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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    //
    Route::get('/', [HomeController::class, 'index']);
    Route::get('dashboard', [HomeController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile/store', [ProfileController::class, 'store']);
    Route::post('/profile/ubahpassword', [ProfileController::class, 'ubahpassword']);


    Route::get('/form', [SurveyController::class, 'create']);
    Route::post('/storeform', [SurveyController::class, 'store']);

    Route::get('/form-edit/{id}', [SurveyController::class, 'show']);
    Route::post('/updateform/{id}', [SurveyController::class, 'update']);
    Route::post('/hapusform', [SurveyController::class, 'destroy']);


});

require __DIR__.'/auth.php';
