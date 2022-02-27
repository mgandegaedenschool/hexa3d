<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Irmr3FormController;
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

    /* test IRMR3*/
    Route::get('/test/test_irmr3_conditions', 'App\Http\Controllers\TestIrmr3Controller@conditions')->name('test.test_irmr3_conditions');
    Route::get('/test/test_irmr3_consignes', 'App\Http\Controllers\TestIrmr3Controller@consignes')->name('test.test_irmr3_consignes');
    Route::get('/test/test_irmr3_formulaire', 'App\Http\Controllers\TestIrmr3Controller@formulaire')->name('test.test_irmr3_formulaire');
    Route::post('/test/test_irmr3_formulaire', 'App\Http\Controllers\TestIrmr3Controller@store')->name('test.test_irmr3_formulaire.store');
    Route::get('/test/test_irmr3_bonus', 'App\Http\Controllers\TestIrmr3Controller@bonus')->name('test.test_irmr3_bonus');
    Route::get('/test/test_irmr3_fin', 'App\Http\Controllers\TestIrmr3Controller@fin')->name('test.test_irmr3_fin');

/**********************************************************************************************************/
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
Route::post('/import_parse', [\App\Http\Controllers\ImportController::class, 'parseImport'])->name('import_parse');
Route::post('/import_process', [\App\Http\Controllers\ImportController::class, 'processImport'])->name('import_process');
/***********************************************************************************************************/

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name("forgot-password");

Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('auth.reset-password');

Route::resource('/pro', UserController::class);
Route::post('/import', 'App\Http\Controllers\UserController@import');
// Route::post('/pro/store', UserController::class)->name('pro.store');
Route::post('/pro/importcsv', 'App\Http\Controllers\Admin\User\UserController@importCsv')->name('pro.importcsv');

Route::get('register/create-step-one', 'App\Http\Controllers\RegisteredUserController@createStepOne')->name('register.create.step.one');
Route::post('register/create-step-one', 'App\Http\Controllers\RegisteredUserController@postCreateStepOne')->name('register.create.step.one.post');
Route::get('register/create-step-two', 'App\Http\Controllers\RegisteredUserController@createStepTwo')->name('register.create.step.two');
Route::post('register/create-step-two', 'App\Http\Controllers\RegisteredUserController@postCreateStepTwo')->name('register.create.step.two.post');
Route::get('register/create-step-three', 'App\Http\Controllers\RegisteredUserController@createStepThree')->name('register.create.step.three');
Route::post('register/create-step-three', 'App\Http\Controllers\RegisteredUserController@postCreateStepThree')->name('register.create.step.three.post');
Route::get('register/{id}', 'App\Http\Controllers\RegisteredUserController@createStepOne')->name('register.email');


Route::get('/getMember', 'App\Http\Controllers\GetMemberController@index')->name('admin.member');
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
