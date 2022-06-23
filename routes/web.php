<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\UserController;
use App\Models\Perusahaan;
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

    Route::get('perusahaan', [PerusahaanController::class, 'index']);
    Route::get('perusahaan/create', [PerusahaanController::class, 'create']);
    Route::post('perusahaan/store', [PerusahaanController::class, 'store']);
    Route::get('perusahaan/{id}', [PerusahaanController::class, 'show']);
    Route::post('perusahaan/update', [PerusahaanController::class, 'update']);

    Route::get('user', [UserController::class, 'index']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::post('/user/update', [UserController::class, 'update']);
    Route::post('/user/delete', [UserController::class, 'delete']);

    Route::post('/user/roles', [UserController::class, 'user_roles']);
    Route::post('/user/perusahaan', [UserController::class, 'user_perusahaan']);
    Route::post('/user/resetpassword', [UserController::class, 'resetpassword']);
    Route::post('/user/ubahpassword', [UserController::class, 'ubahpassword']);

    Route::get('roles', [UserController::class, 'roles']);
    Route::post('roles/add', [UserController::class, 'roles_add']);
    Route::post('roles/edit', [UserController::class, 'roles_edit']);
    Route::post('roles/delete', [UserController::class, 'roles_delete']);

    Route::get('permissions', [UserController::class, 'permissions']);
    Route::post('permissions/add', [UserController::class, 'permissions_add']);
    Route::post('permissions/delete', [UserController::class, 'permissions_delete']);
});

require __DIR__ . '/auth.php';
