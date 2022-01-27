<?php

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

Route::get('admin/user_index', function(){
    return view('admin.user_index');
})->name('admin.user_index');

Route::post('admin/user_delete', function(){
    return view('admin.user_delete');
})->name('admin.user_delete');

Route::post('admin/user_store', function(){
    return view('admin.user_store');
})->name('admin.user_store');

Route::post('admin/user_update', function(){
    return view('admin.user_update');
})->name('admin.user_update');

Route::get('admin/user_edit', function(){
    return view('admin.user_edit');
})->name('admin.user_edit');

Route::get('admin/user_show/{id}', function(){
    return view('admin.user_show');
})->name('admin.user_show');

Route::get('admin/domaine_index', function(){
    return view('admin.domaine_index');
})->name('admin.domaine_index');

Route::get('admin/domaine_edit', function(){
    return view('admin.domaine_edit');
})->name('admin.domaine_edit');

Route::get('admin/domaine_show', function(){
    return view('admin.domaine_show');
})->name('admin.domaine_show');

Route::post('admin/domaine_update', function(){
    return view('admin.domaine_update');
})->name('admin.domaine_update');

Route::post('admin/domaine_delete', function(){
    return view('admin.domaine_delete');
})->name('admin.domaine_delete');

Route::post('admin/domaine_store', function(){
    return view('admin.domaine_store');
})->name('admin.domaine_store');


Route::get('admin/etalonnage_index', function(){
    return view('admin.etalonnage_index');
})->name('admin.etalonnage_index');

Route::get('admin/etalonnage_edit', function(){
    return view('admin.etalonnage_edit');
})->name('admin.etalonnage_edit');

Route::get('admin/etalonnage_show', function(){
    return view('admin.etalonnage_show');
})->name('admin.etalonnage_show');

Route::post('admin/etalonnage_update', function(){
    return view('admin.etalonnage_update');
})->name('admin.etalonnage_update');

Route::post('admin/etalonnage_delete', function(){
    return view('admin.etalonnage_delete');
})->name('admin.etalonnage_delete');

Route::post('admin/etalonnage_store', function(){
    return view('admin.etalonnage_store');
})->name('admin.etalonnage_store');


Route::get('admin/participation_index', function(){
    return view('admin.participation_index');
})->name('admin.participation_index');

Route::get('admin/participation_edit', function(){
    return view('admin.participation_edit');
})->name('admin.participation_edit');

Route::get('admin/participation_show', function(){
    return view('admin.participation_show');
})->name('admin.participation_show');

Route::post('admin/participation_update', function(){
    return view('admin.participation_update');
})->name('admin.participation_update');

Route::post('admin/participation_delete', function(){
    return view('admin.participation_delete');
})->name('admin.participation_delete');

Route::post('admin/participation_store', function(){
    return view('admin.participation_store');
})->name('admin.participation_store');


Route::get('admin/partie_index', function(){
    return view('admin.partie_index');
})->name('admin.partie_index');

Route::get('admin/partie_edit', function(){
    return view('admin.partie_edit');
})->name('admin.partie_edit');

Route::get('admin/partie_show', function(){
    return view('admin.partie_show');
})->name('admin.partie_show');

Route::post('admin/partie_update', function(){
    return view('admin.partie_update');
})->name('admin.partie_update');

Route::post('admin/partie_delete', function(){
    return view('admin.partie_delete');
})->name('admin.partie_delete');

Route::post('admin/partie_store', function(){
    return view('admin.partie_store');
})->name('admin.partie_store');


Route::get('admin/question_index', function(){
    return view('admin.question_index');
})->name('admin.question_index');

Route::get('admin/question_edit', function(){
    return view('admin.question_edit');
})->name('admin.question_edit');

Route::get('admin/question_show', function(){
    return view('admin.question_show');
})->name('admin.question_show');

Route::post('admin/question_update', function(){
    return view('admin.question_update');
})->name('admin.question_update');

Route::post('admin/question_delete', function(){
    return view('admin.question_delete');
})->name('admin.question_delete');

Route::post('admin/question_store', function(){
    return view('admin.question_store');
})->name('admin.question_store');


Route::get('admin/reponse_index', function(){
    return view('admin.reponse_index');
})->name('admin.reponse_index');

Route::get('admin/reponse_edit', function(){
    return view('admin.reponse_edit');
})->name('admin.reponse_edit');

Route::get('admin/reponse_show', function(){
    return view('admin.reponse_show');
})->name('admin.reponse_show');

Route::post('admin/reponse_update', function(){
    return view('admin.reponse_update');
})->name('admin.reponse_update');

Route::post('admin/reponse_delete', function(){
    return view('admin.reponse_delete');
})->name('admin.reponse_delete');

Route::post('admin/reponse_store', function(){
    return view('admin.reponse_store');
})->name('admin.reponse_store');


Route::get('admin/test_index', function(){
    return view('admin.test_index');
})->name('admin.test_index');

Route::get('admin/test_edit', function(){
    return view('admin.test_edit');
})->name('admin.test_edit');

Route::get('admin/test_show', function(){
    return view('admin.test_show');
})->name('admin.test_show');

Route::post('admin/test_update', function(){
    return view('admin.test_update');
})->name('admin.test_update');

Route::post('admin/test_delete', function(){
    return view('admin.test_delete');
})->name('admin.test_delete');

Route::post('admin/test_store', function(){
    return view('admin.test_store');
})->name('admin.test_store');


Route::get('admin/type_index', function(){
    return view('admin.type_index');
})->name('admin.type_index');

Route::get('admin/type_edit', function(){
    return view('admin.type_edit');
})->name('admin.type_edit');

Route::get('admin/type_show', function(){
    return view('admin.type_show');
})->name('admin.type_show');

Route::post('admin/type_update', function(){
    return view('admin.type_update');
})->name('admin.type_update');

Route::post('admin/type_delete', function(){
    return view('admin.type_delete');
})->name('admin.type_delete');

Route::post('admin/type_store', function(){
    return view('admin.type_store');
})->name('admin.type_store');

Route::get('/espace_membre', function(){
    return view('espace_membre.espace_membre');
})->name('espace_membre.espace_membre');

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


