<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParticipationController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;

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
Route::resource('/admin/user', UserController::class);

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('register/create-step-one', 'App\Http\Controllers\RegisteredUserController@createStepOne')->name('register.create.step.one');
Route::post('register/create-step-one', 'App\Http\Controllers\RegisteredUserController@postCreateStepOne')->name('register.create.step.one.post');

Route::get('register/create-step-two', 'App\Http\Controllers\RegisteredUserController@createStepTwo')->name('register.create.step.two');
Route::post('register/create-step-two', 'App\Http\Controllers\RegisteredUserController@postCreateStepTwo')->name('register.create.step.two.post');

Route::get('register/create-step-three', 'App\Http\Controllers\RegisteredUserController@createStepThree')->name('register.create.step.three');
Route::post('register/create-step-three', 'App\Http\Controllers\RegisteredUserController@postCreateStepThree')->name('register.create.step.three.post');


Route::get('/admin/admin', function () {
    return view('admin.admin');
});

Route::get('/forgot-password', function(){
    return view('auth.forgot-password');
})->name("forgot-password");

Route::get('/reset-password', function(){
    return view('auth.reset-password');
})->name('auth.reset-password');

Route::get('admin/admin', function(){
    return view('admin.admin');
})->name('admin.admin');

Route::get('/getMember', 'App\Http\Controllers\GetMemberController@index')->name('admin.member');
// Route::get('/admin/user_index', 'App\Http\Controllers\UserController@index')->name('admin.user_index');
// Route::get('/admin/user_create', 'App\Http\Controllers\UserController@create')->name('admin.user_create');
// Route::post('/admin/user_store', 'App\Http\Controllers\UserController@store')->name('admin.user_store');

// Route::get('/admin/user_edit/{id}', 'App\Http\Controllers\UserController@edit')->name('admin.user_edit');
// Route::put('/admin/user_update/{id}', 'App\Http\Controllers\UserController@update')->name('admin.user_update');

// Route::get('/admin/user_show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.user_show');
// Route::post('/admin/user_delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.user_delete');


Route::get('/admin/domaine_index', function () {
    return view('admin.domaine_index');
})->name('admin.domaine_index');
Route::get('/admin/domaine_create', function () {
    return view('admin.domaine_create');
})->name('admin.domaine_create');
Route::get('/admin/domaine_show', function () {
    return view('admin.domaine_show');
})->name('admin.domaine_show');
Route::get('/admin/domaine_store', function () {
    return view('admin.domaine_store');
})->name('admin.domaine_store');
Route::get('/admin/domaine_edit', function () {
    return view('admin.domaine_edit');
})->name('admin.domaine_edit');
Route::get('/admin/domaine_delete', function () {
    return view('admin.domaine_delete');
})->name('admin.domaine_delete');
Route::get('/admin/domaine_update/', function () {
    return view('admin.domaine_update');
})->name('admin.domaine_update');


Route::get('/admin/etalonnage_index', function () {
    return view('admin.etalonnage_index');
})->name('admin.etalonnage_index');
Route::get('/admin/etalonnage_create', function () {
    return view('admin.etalonnage_create');
})->name('admin.etalonnage_create');
Route::get('/adminetalonnagee_show', function () {
    return view('admin.etalonnage_show');
})->name('admin.etalonnage_show');
Route::get('/admin/etalonnage_store', function () {
    return view('admin.etalonnage_store');
})->name('admin.etalonnage_store');
Route::get('/admin/etalonnage_edit', function () {
    return view('admin.etalonnage_edit');
})->name('admin.etalonnage_edit');
Route::get('/admin/etalonnage_delete', function () {
    return view('admin.etalonnage_delete');
})->name('admin.etalonnage_delete');
Route::get('/admin/etalonnage_update/', function () {
    return view('admin.etalonnage_update');
})->name('admin.etalonnage_update');

Route::get('/admin/participation_index', function () {
    return view('admin.participation_index');
})->name('admin.participation_index');
Route::get('/admin/participation_create', function () {
    return view('admin.participation_create');
})->name('admin.participation_create');
Route::get('/admin/participation_show', function () {
    return view('admin.participation_show');
})->name('admin.participation_show');
Route::get('/admin/participation_store', function () {
    return view('admin.participation_store');
})->name('admin.participation_store');
Route::get('/admin/participation_edit', function () {
    return view('admin.participation_edit');
})->name('admin.participation_edit');
Route::get('/admin/participation_delete', function () {
    return view('admin.participation_delete');
})->name('admin.participation_delete');
Route::get('/admin/participation_update/', function () {
    return view('admin.participation_update');
})->name('admin.participation_update');


Route::get('test/irmr3', 'App\Http\Controllers\TestIrmr3Controller@index')->name('test.irmr3_index');
Route::get('test/create-step-one', 'App\Http\Controllers\TestIrmr3Controller@createStepOne')->name('test.create.step.one');
Route::post('test/create-step-one', 'App\Http\Controllers\TestIrmr3Controller@postCreateStepOne')->name('test.create.step.one.post');

Route::get('test/create-step-two', 'App\Http\Controllers\TestIrmr3Controller@createStepTwo')->name('test.create.step.two');
Route::post('test/create-step-two', 'App\Http\Controllers\TestIrmr3Controller@postCreateStepTwo')->name('test.create.step.two.post');

Route::get('test/create-step-three', 'App\Http\Controllers\TestIrmr3Controller@createStepThree')->name('test.create.step.three');
Route::post('test/create-step-three', 'App\Http\Controllers\TestIrmr3Controller@postCreateStepThree')->name('test.create.step.three.post');

// /***** DOMAINE ROUTES *****/
// Route::get('/admin/domaine_index', 'App\Http\Controllers\DomaineController@index')->name('admin.domaine_index');
// Route::get('/admin/domaine_create', 'App\Http\Controllers\DomaineController@create')->name('admin.domaine_create');
// Route::post('/admin/domaine_store', 'App\Http\Controllers\DomaineController@store')->name('admin.domaine_store');

// Route::get('/admin/domaine_edit/{id}', 'App\Http\Controllers\DomaineController@edit')->name('admin.domaine_edit');
// Route::post('/admin/domaine_update/{id}', 'App\Http\Controllers\DomaineController@update')->name('admin.domaine_update');

// Route::get('/admin/domaine_show/{id}', 'App\Http\Controllers\DomaineController@show')->name('admin.domaine_show');
// Route::post('/admin/domaine_delete/{id}', 'App\Http\Controllers\DomaineController@destroy')->name('admin.domaine_delete');

// /* Etalonnage route */
// Route::get('/admin/etalonnage_index', 'App\Http\Controllers\EtalonnageController@index')->name('admin.etalonnage_index');
// Route::get('/admin/etalonnage_create', 'App\Http\Controllers\EtalonnageController@create')->name('admin.etalonnage_create');
// Route::post('/admin/etalonnage_store', 'App\Http\Controllers\EtalonnageController@store')->name('admin.etalonnage_store');

// Route::get('/admin/etalonnage_edit/{id}', 'App\Http\Controllers\EtalonnageController@edit')->name('admin.etalonnage_edit');
// Route::get('/admin/etalonnage_show/{id}', 'App\Http\Controllers\EtalonnageController@show')->name('admin.etalonnage_show');
// Route::post('/admin/etalonnage_update/{id}', 'App\Http\Controllers\EtalonnageController@update')->name('admin.etalonnage_update');
// Route::post('/admin/etalonnage_delete/{id}', 'App\Http\Controllers\EtalonnageController@destroy')->name('admin.etalonnage_delete');

// /* Participation route */
// Route::get('/admin/participation_index', 'App\Http\Controllers\ParticipationController@index')->name('admin.participation_index');
// Route::get('/admin/participation_create', 'App\Http\Controllers\ParticipationController@create')->name('admin.participation_create');
// Route::post('/admin/participation_store', 'App\Http\Controllers\ParticipationController@store')->name('admin.participation_store');

// Route::get('/admin/participation_edit/{id}', 'App\Http\Controllers\ParticipationController@edit')->name('admin.participation_edit');
// Route::get('/admin/participation_show/{id}', 'App\Http\Controllers\ParticipationController@show')->name('admin.participation_show');
// Route::post('/admin/participation_update/{id}', 'App\Http\Controllers\ParticipationController@update')->name('admin.participation_update');
// Route::post('/admin/participation_delete/{id}', 'App\Http\Controllers\ParticipationController@destroy')->name('admin.participation_delete');

// /* Partie route */
// Route::get('/admin/partie_index', 'App\Http\Controllers\PartieController@index')->name('admin.partie_index');
// Route::get('/admin/partie_create', 'App\Http\Controllers\PartieController@create')->name('admin.partie_create');
// Route::post('/admin/partie_store', 'App\Http\Controllers\PartieController@store')->name('admin.partie_store');

// Route::get('/admin/partie_edit/{id}', 'App\Http\Controllers\PartieController@edit')->name('admin.partie_edit');
// Route::get('/admin/partie_show/{id}', 'App\Http\Controllers\PartieController@show')->name('admin.partie_show');
// Route::post('/admin/partie_update/{id}', 'App\Http\Controllers\PartieController@update')->name('admin.partie_update');
// Route::post('/admin/partie_delete/{id}', 'App\Http\Controllers\PartieController@destroy')->name('admin.partie_delete');

// /* Question route */
// Route::get('/admin/question_index', 'App\Http\Controllers\QuestionController@index')->name('admin.question_index');
// Route::get('/admin/question_create', 'App\Http\Controllers\QuestionController@create')->name('admin.question_create');
// Route::post('/admin/question_store', 'App\Http\Controllers\QuestionController@store')->name('admin.question_store');

// Route::get('/admin/question_edit/{id}', 'App\Http\Controllers\QuestionController@edit')->name('admin.question_edit');
// Route::get('/admin/question_show/{id}', 'App\Http\Controllers\QuestionController@show')->name('admin.question_show');
// Route::post('/admin/question_update/{id}', 'App\Http\Controllers\QuestionController@update')->name('admin.question_update');
// Route::post('/admin/question_delete/{id}', 'App\Http\Controllers\QuestionController@destroy')->name('admin.question_delete');

// /***** REPONSE ROUTES *****/
// Route::get('/admin/reponse_index', 'App\Http\Controllers\ReponseController@index')->name('admin.reponse_index');
// Route::get('/admin/reponse_create', 'App\Http\Controllers\ReponseController@create')->name('admin.reponse_create');
// Route::post('/admin/reponse_store', 'App\Http\Controllers\ReponseController@store')->name('admin.reponse_store');

// Route::get('/admin/reponse_edit/{id}', 'App\Http\Controllers\ReponseController@edit')->name('admin.reponse_edit');
// Route::post('/admin/reponse_update/{id}', 'App\Http\Controllers\ReponseController@update')->name('admin.reponse_update');

// Route::get('/admin/reponse_show/{id}', 'App\Http\Controllers\ReponseController@show')->name('admin.reponse_show');
// Route::post('/admin/reponse_delete/{id}', 'App\Http\Controllers\ReponseController@destroy')->name('admin.reponse_delete');

// /***** TEST ROUTES *****/
// Route::get('/admin/test_index', 'App\Http\Controllers\TestController@index')->name('admin.test_index');
// Route::get('/admin/test_create', 'App\Http\Controllers\TestController@create')->name('admin.test_create');
// Route::post('/admin/test_store', 'App\Http\Controllers\TestController@store')->name('admin.test_store');

// Route::get('/admin/test_edit/{id}', 'App\Http\Controllers\TestController@edit')->name('admin.test_edit');
// Route::post('/admin/test_update/{id}', 'App\Http\Controllers\TestController@update')->name('admin.test_update');

// Route::get('/admin/test_show/{id}', 'App\Http\Controllers\TestController@show')->name('admin.test_show');
// Route::post('/admin/test_delete/{id}', 'App\Http\Controllers\TestController@destroy')->name('admin.test_delete');

// /***** TYPE ROUTES *****/
// Route::get('/admin/type_index', 'App\Http\Controllers\TypeController@index')->name('admin.type_index');
// Route::get('/admin/type_create', 'App\Http\Controllers\TypeController@create')->name('admin.type_create');
// Route::post('/admin/type_store', 'App\Http\Controllers\TypeController@store')->name('admin.type_store');

// Route::get('/admin/type_edit/{id}', 'App\Http\Controllers\TypeController@edit')->name('admin.type_edit');
// Route::post('/admin/type_update/{id}', 'App\Http\Controllers\TypeController@update')->name('admin.type_update');

// Route::get('/admin/type_show/{id}', 'App\Http\Controllers\TypeController@show')->name('admin.type_show');
// Route::post('/admin/type_delete/{id}', 'App\Http\Controllers\TypeController@destroy')->name('admin.type_delete');

// Route::get('/espace_membre', function(){
//     return view('espace_membre.espace_membre');
// })->name('espace_membre.espace_membre');





























// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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