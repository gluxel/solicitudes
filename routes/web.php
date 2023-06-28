<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\RegistroController;
Use App\Http\Controllers\RegistAjaxController;

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
    return view('auth.login');
});

Auth::routes();
Route::resource('registros', RegistroController::class)->middleware(['auth']);
Route::resource('personals', PersonalController::class)->middleware(['auth']);
Route::resource('asistencias', AsistenciaController::class)->middleware(['auth']);
Route::resource('permisos', PermisoController::class)->middleware(['auth']);
Route::resource('vacaciones', VacacionController::class)->middleware(['auth']);
Route::resource('servicios', ServicioController::class)->middleware(['auth']);
Route::resource('contractuals', ContractualController::class)->middleware(['auth']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('getestado', [RegistAjaxController::class, 'getestado']);
Route::post('getmuni', [RegistAjaxController::class, 'getmuni']);
Route::post('getparroq', [RegistAjaxController::class, 'getparroq']);
Route::post('getcateg', [RegistAjaxController::class, 'getcateg']);
Route::post('getsubcateg', [RegistAjaxController::class, 'getsubcateg']);
Route::post('getextcateg', [RegistAjaxController::class, 'getextcateg']);
Route::get('getestatus', [RegistAjaxController::class, 'getestatus']);


// -----------------------------login-----------------------------------------
// Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
// Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// // ------------------------------register---------------------------------------
// Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
// Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@storeUser')->name('register');

// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');
