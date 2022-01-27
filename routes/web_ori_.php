<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParticipationController;
use App\Http\Controllers\RegisteredUserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('register/create-step-one', 'App\Http\Controllers\RegisteredUserController@createStepOne')->name('register.create.step.one');
Route::post('register/create-step-one', 'App\Http\Controllers\RegisteredUserController@postCreateStepOne')->name('register.create.step.one.post');

Route::get('register/create-step-two', 'App\Http\Controllers\RegisteredUserController@createStepTwo')->name('register.create.step.two');
Route::post('register/create-step-two', 'App\Http\Controllers\RegisteredUserController@postCreateStepTwo')->name('register.create.step.two.post');

Route::get('test', 'TestHexa3dController@index')->name('test.index');
Route::get('register/create-step-three', 'App\Http\Controllers\RegisteredUserController@createStepThree')->name('register.create.step.three');
Route::post('register/create-step-three', 'App\Http\Controllers\RegisteredUserController@postCreateStepThree')->name('register.create.step.three.post');




Route::get('/admin/admin', function () {
    return view('admin.admin');
});

Route::get('/admin/user_index', function () {
    return view('admin.user_index');
})->name('admin.user_index');
Route::post('/admin/user_store', function () {
    return view('admin.user_store');
})->name('admin.user_store');


Route::get('/admin/user_index', 'App\Http\Controllers\UserController@index')->name('admin.user_index');
Route::get('/admin/user_create', 'App\Http\Controllers\UserController@create')->name('admin.create');
Route::post('/admin/user_store', 'App\Http\Controllers\UserController@store')->name('admin.store');

Route::get('/admin/user_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.edit');
Route::post('/admin/user_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.update');

Route::get('/admin/user_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.show');
Route::post('/admin/user_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.delete');


Route::get('/admin/user_index', 'App\Http\Controllers\UserController@index')->name('admin._index');
Route::get('/admin/user_create', 'App\Http\Controllers\UserController@create')->name('admin.create');
Route::post('/admin/user_store', 'App\Http\Controllers\UserController@store')->name('admin.store');

Route::get('/admin/user_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.edit');
Route::post('/admin/user_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.update');

Route::get('/admin/user_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.show');
Route::post('/admin/user_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.delete');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pdf', [PDFController::class, 'showPDF'])->name('pdf.index');
Route::get('/pdf/create', [PDFController::class, 'createPDF'])->name('pdf.create');


Route::get('/dashboard/create', [PatientController::class, 'create'])->name('patient.create');
Route::post('/dashboard/create', [PatientController::class, 'store'])->name('patient.store');

Route::get('/dashboard/{id_patient?}', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('/dashboard/{id_patient?}/update', [PatientController::class, 'update'])->name('patient.update');


// Route::get('/{token_participation}', [ParticipationController::class, 'index'])->name('participation');
// Route::get('/{token_participation}', '\App\Http\Controllers\ParticipationController@index');
Route::post('/{token_participation}/update/', [ParticipationController::class, 'update'])->name('participation.update');
Route::post('/{id_participation}/delete/', [ParticipationController::class, 'delete'])->name('participation.delete');
Route::post('/{id_participation}/reset/', [ParticipationController::class, 'reset'])->name('participation.reset');

Route::get('/{token_participation}/example', [ExampleController::class, 'index'])->name('participation.example');
Route::post('/{token_participation}/example', [ExampleController::class, 'store'])->name('participation.example.store');

Route::get('/{token_participation}/test', [TestController::class, 'show'])->name('participation.test');
Route::post('/{token_participation}/test', [TestController::class, 'update'])->name('participation.test.update');


// Route::middleware(['admin'])->group(function () {
//     Route::get('admin', UserController::class);
// });
// Route::resource('admin', UserController::class);

// Route::post('/{id_patient}/', [ParticipationController::class, 'store'])->name('participation.store');
require __DIR__ . '/auth.php';
