<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParticipationController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\Admin\Type\TypeController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\Domaine\DomaineController;
use App\Http\Controllers\Admin\Question\QuestionController;
use App\Http\Controllers\Admin\User\UserRegistrationController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/admin', function () {
        return view('admin.admin');
    })->name('admin.admin');
    Route::resource('/admin/user', UserController::class);
    Route::resource('/admin/register', UserRegistrationController::class);
    Route::resource('/admin/type', TypeController::class);
    Route::resource('/admin/domaine', DomaineController::class);
    Route::resource('/admin/question', QuestionController::class);
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name("forgot-password");

Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('auth.reset-password');

Route::get('register/create-step-one', 'App\Http\Controllers\RegisteredUserController@createStepOne')->name('register.create.step.one');
Route::post('register/create-step-one', 'App\Http\Controllers\RegisteredUserController@postCreateStepOne')->name('register.create.step.one.post');
Route::get('register/create-step-two', 'App\Http\Controllers\RegisteredUserController@createStepTwo')->name('register.create.step.two');
Route::post('register/create-step-two', 'App\Http\Controllers\RegisteredUserController@postCreateStepTwo')->name('register.create.step.two.post');
Route::get('register/create-step-three', 'App\Http\Controllers\RegisteredUserController@createStepThree')->name('register.create.step.three');
Route::post('register/create-step-three', 'App\Http\Controllers\RegisteredUserController@postCreateStepThree')->name('register.create.step.three.post');

Route::get('/getMember', 'App\Http\Controllers\GetMemberController@index')->name('admin.member');
Route::get('test/irmr3', 'App\Http\Controllers\TestIrmr3Controller@index')->name('test.irmr3_index');
Route::get('test/create-step-one', 'App\Http\Controllers\TestIrmr3Controller@createStepOne')->name('test.create.step.one');
Route::post('test/create-step-one', 'App\Http\Controllers\TestIrmr3Controller@postCreateStepOne')->name('test.create.step.one.post');
Route::get('test/create-step-two', 'App\Http\Controllers\TestIrmr3Controller@createStepTwo')->name('test.create.step.two');
Route::post('test/create-step-two', 'App\Http\Controllers\TestIrmr3Controller@postCreateStepTwo')->name('test.create.step.two.post');
Route::get('test/create-step-three', 'App\Http\Controllers\TestIrmr3Controller@createStepThree')->name('test.create.step.three');
Route::post('test/create-step-three', 'App\Http\Controllers\TestIrmr3Controller@postCreateStepThree')->name('test.create.step.three.post');
Route::get('/pdf', [PDFController::class, 'showPDF'])->name('pdf.index');
Route::get('/pdf/create', [PDFController::class, 'createPDF'])->name('pdf.create');
Route::get('/dashboard/create', [PatientController::class, 'create'])->name('patient.create');
Route::post('/dashboard/create', [PatientController::class, 'store'])->name('patient.store');
Route::get('/dashboard/{id_patient?}', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('/dashboard/{id_patient?}/update', [PatientController::class, 'update'])->name('patient.update');
Route::post('/{token_participation}/update/', [ParticipationController::class, 'update'])->name('participation.update');
Route::post('/{id_participation}/delete/', [ParticipationController::class, 'delete'])->name('participation.delete');
Route::post('/{id_participation}/reset/', [ParticipationController::class, 'reset'])->name('participation.reset');
Route::get('/{token_participation}/example', [ExampleController::class, 'index'])->name('participation.example');
Route::post('/{token_participation}/example', [ExampleController::class, 'store'])->name('participation.example.store');
Route::get('/{token_participation}/test', [TestController::class, 'show'])->name('participation.test');
Route::post('/{token_participation}/test', [TestController::class, 'update'])->name('participation.test.update');

// Route::get('/{token_participation}', [ParticipationController::class, 'index'])->name('participation');
// Route::get('/{token_participation}', '\App\Http\Controllers\ParticipationController@index');
// Route::post('/{id_patient}/', [ParticipationController::class, 'store'])->name('participation.store');
require __DIR__ . '/auth.php';
