<?php

use App\Http\Controllers\Irmr3FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParticipationController;
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

Route::get('/register', function(){
    return view('auth.register');
})->name('auth.register');

Route::get('/login', function(){
    return view('auth.login');
})->name('auth.login');

Route::get('/forgot-password', function(){
    return view('auth.forgot-password');
})->name("forgot-password");

Route::get('/reset-password', function(){
    return view('auth.reset-password');
})->name('auth.reset-password');

Route::get('admin/admin', function(){
    return view('admin.admin');
})->name('admin.admin');

/* User route */
Route::get('/admin/user_index', 'App\Http\Controllers\UserController@index')->name('admin.user_index');
Route::get('/admin/user_create', 'App\Http\Controllers\UserController@create')->name('admin.user_create');
Route::post('/admin/user_store', 'App\Http\Controllers\UserController@store')->name('admin.user_store');

Route::get('/admin/user_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.user_edit');
Route::get('/admin/user_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.user_show');
Route::post('/admin/user_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.user_update');
Route::post('/admin/user_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.user_delete');


/* Etalonnage route */
Route::get('/admin/etalonnage_index', 'App\Http\Controllers\UserController@index')->name('admin.etalonnage_index');
Route::get('/admin/etalonnage_create', 'App\Http\Controllers\UserController@create')->name('admin.etalonnage_create');
Route::post('/admin/etalonnage_store', 'App\Http\Controllers\UserController@store')->name('admin.etalonnage_store');

Route::get('/admin/etalonnage_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.etalonnage_edit');
Route::get('/admin/etalonnage_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.etalonnage_show');
Route::post('/admin/etalonnage_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.etalonnage_update');
Route::post('/admin/etalonnage_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.etalonnage_delete');

/* Participation route */
Route::get('/admin/participation_index', 'App\Http\Controllers\UserController@index')->name('admin.participation_index');
Route::get('/admin/participation_create', 'App\Http\Controllers\UserController@create')->name('admin.participation_create');
Route::post('/admin/participation_store', 'App\Http\Controllers\UserController@store')->name('admin.participation_store');

Route::get('/admin/participation_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.participation_edit');
Route::get('/admin/participation_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.participation_show');
Route::post('/admin/participation_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.participation_update');
Route::post('/admin/participation_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.participation_delete');

/* Partie route */
Route::get('/admin/partie_index', 'App\Http\Controllers\UserController@index')->name('admin.partie_index');
Route::get('/admin/partie_create', 'App\Http\Controllers\UserController@create')->name('admin.partie_create');
Route::post('/admin/partie_store', 'App\Http\Controllers\UserController@store')->name('admin.partie_store');

Route::get('/admin/partie_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.partie_edit');
Route::get('/admin/partie_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.partie_show');
Route::post('/admin/partie_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.partie_update');
Route::post('/admin/partie_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.partie_delete');

/* Question route */
Route::get('/admin/question_index', 'App\Http\Controllers\UserController@index')->name('admin.question_index');
Route::get('/admin/question_create', 'App\Http\Controllers\UserController@create')->name('admin.question_create');
Route::post('/admin/question_store', 'App\Http\Controllers\UserController@store')->name('admin.question_store');

Route::get('/admin/question_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.question_edit');
Route::get('/admin/question_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.question_show');
Route::post('/admin/question_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.question_update');
Route::post('/admin/question_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.question_delete');

/***** DOMAINE ROUTES *****/
Route::get('/admin/domaine_index', 'App\Http\Controllers\UserController@index')->name('admin.domaine_index');
Route::get('/admin/domaine_create', 'App\Http\Controllers\UserController@create')->name('admin.domaine_create');
Route::post('/admin/domaine_store', 'App\Http\Controllers\UserController@store')->name('admin.domaine_store');

Route::get('/admin/domaine_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.domaine_edit');
Route::post('/admin/domaine_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.domaine_update');

Route::get('/admin/domaine_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.domaine_show');
Route::post('/admin/domaine_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.domaine_delete');

/***** REPONSE ROUTES *****/
Route::get('/admin/reponse_index', 'App\Http\Controllers\UserController@index')->name('admin.reponse_index');
Route::get('/admin/reponse_create', 'App\Http\Controllers\UserController@create')->name('admin.reponse_create');
Route::post('/admin/reponse_store', 'App\Http\Controllers\UserController@store')->name('admin.reponse_store');

Route::get('/admin/reponse_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.reponse_edit');
Route::post('/admin/reponse_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.reponse_update');

Route::get('/admin/reponse_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.reponse_show');
Route::post('/admin/reponse_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.reponse_delete');

/***** TEST ROUTES *****/
Route::get('/admin/test_index', 'App\Http\Controllers\UserController@index')->name('admin.test_index');
Route::get('/admin/test_create', 'App\Http\Controllers\UserController@create')->name('admin.test_create');
Route::post('/admin/test_store', 'App\Http\Controllers\UserController@store')->name('admin.test_store');

Route::get('/admin/test_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.test_edit');
Route::post('/admin/test_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.test_update');

Route::get('/admin/test_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.test_show');
Route::post('/admin/test_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.test_delete');

/***** TYPE ROUTES *****/
Route::get('/admin/type_index', 'App\Http\Controllers\UserController@index')->name('admin.type_index');
Route::get('/admin/type_create', 'App\Http\Controllers\UserController@create')->name('admin.type_create');
Route::post('/admin/type_store', 'App\Http\Controllers\UserController@store')->name('admin.type_store');

Route::get('/admin/type_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.type_edit');
Route::post('/admin/type_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.type_update');

Route::get('/admin/type_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.type_show');
Route::post('/admin/type_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.type_delete');


/* test IRMR3*/
Route::get('/test/test_irmr3_conditions', 'App\Http\Controllers\TestIrmr3Controller@conditions')->name('test.test_irmr3_conditions');
Route::get('/test/test_irmr3_consignes', 'App\Http\Controllers\TestIrmr3Controller@consignes')->name('test.test_irmr3_consignes');
Route::get('/test/test_irmr3_formulaire', 'App\Http\Controllers\TestIrmr3Controller@formulaire')->name('test.test_irmr3_formulaire');
Route::get('/test/test_irmr3_bonus', 'App\Http\Controllers\TestIrmr3Controller@bonus')->name('test.test_irmr3_bonus');
Route::get('/test/test_irmr3_fin', 'App\Http\Controllers\TestIrmr3Controller@fin')->name('test.test_irmr3_fin');
/* form parts */
Route::post('/test/test_irmr3_formulaire_part1', 'App\Http\Controllers\TestIrmr3Controller@formulaire1')->name('test.test_irmr3_formulaire_part1');
Route::post('/test/test_irmr3_formulaire_part2', 'App\Http\Controllers\TestIrmr3Controller@formulaire2')->name('test.test_irmr3_formulaire_part2');
Route::post('/test/test_irmr3_formulaire_part3', 'App\Http\Controllers\TestIrmr3Controller@formulaire3')->name('test.test_irmr3_formulaire_part3');
Route::post('/test/test_irmr3_formulaire_part4', 'App\Http\Controllers\TestIrmr3Controller@formulaire4')->name('test.test_irmr3_formulaire_part4');
Route::post('/test/test_irmr3_formulaire_part5', 'App\Http\Controllers\TestIrmr3Controller@formulaire5')->name('test.test_irmr3_formulaire_part5');
Route::post('/test/test_irmr3_formulaire_part6', 'App\Http\Controllers\TestIrmr3Controller@formulaire6')->name('test.test_irmr3_formulaire_part6');
Route::post('/test/test_irmr3_formulaire_part7', 'App\Http\Controllers\TestIrmr3Controller@formulaire7')->name('test.test_irmr3_formulaire_part7');
Route::post('/test/test_irmr3_formulaire_part8', 'App\Http\Controllers\TestIrmr3Controller@formulaire8')->name('test.test_irmr3_formulaire_part8');
Route::post('/test/test_irmr3_formulaire_part9', 'App\Http\Controllers\TestIrmr3Controller@formulaire9')->name('test.test_irmr3_formulaire_part9');

Route::get('/Irmr3Form', 'App\Http\Controllers\Irmr3FormController@create')->name('irmr3Form');
Route::post('/Irmr3Form', 'App\Http\Controllers\Irmr3FormController@store')->name('irmr3Form');

Route::get('/', function (){
    return 'Bienvenue tout le monde';
});
Route::get('/pdf', [PDFController::class, 'showPDF'])->name('pdf.index');
Route::get('/pdf/create', [PDFController::class, 'createPDF'])->name('pdf.create');


Route::get('/dashboard/create', [PatientController::class, 'create'])->name('patient.create');
Route::post('/dashboard/create', [PatientController::class, 'store'])->name('patient.store');

Route::get('/dashboard/{id_patient?}', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('/dashboard/{id_patient?}/update', [PatientController::class, 'update'])->name('patient.update');


Route::get('/{token_participation}', [ParticipationController::class, 'index'])->name('participation');
Route::post('/{token_participation}/update/', [ParticipationController::class, 'update'])->name('participation.update');
Route::post('/{id_participation}/delete/', [ParticipationController::class, 'delete'])->name('participation.delete');
Route::post('/{id_participation}/reset/', [ParticipationController::class, 'reset'])->name('participation.reset');

Route::get('/{token_participation}/example', [ExampleController::class, 'index'])->name('participation.example');
Route::post('/{token_participation}/example', [ExampleController::class, 'store'])->name('participation.example.store');

Route::get('/{token_participation}/test', [TestController::class, 'show'])->name('participation.test');
Route::post('/{token_participation}/test', [TestController::class, 'update'])->name('participation.test.update');


Route::post('/{id_patient}/', [ParticipationController::class, 'store'])->name('participation.store');


