<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerKP;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\TerjemahController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\HomeController as HomeAdmin;
use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\QuestionsController;
use App\Http\Controllers\Admin\ResultsController as ResultAdmin;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;

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

Route::get('table',[ControllerKP::class,'index']);
Route::get('dataujian',[ControllerKP::class,'index2']);
Route::get('inputdataujian',[ControllerKP::class,'insert']);
Route::post('insertdb',[ControllerKP::class,'insertdb']);
Route::get('/dataujian/edit/{Nim}',[ControllerKP::class,'edit']);
Route::post('/update',[ControllerKP::class,'update']);
Route::get('/dataujian/hapus/{Nim}',[ControllerKP::class,'hapus']);

Route::post('store4',[LogController::class,'store4']);
Route::get('form4',[LogController::class,'form4']);
Route::get('table4',[LogController::class,'table4']);
Route::get('/logs/delete4/{NIM}',[LogController::class,'delete4']);
Route::get('/tabelfileupload/edit5/{id}',[UploadController::class,'edit5']);
Route::post('/update5',[UploadController::class,'update5']);
Route::get('/upload/delete5/{id}',[UploadController::class,'delete5']);
Route::get('/upload',[UploadController::class,'upload']);
Route::post('/upload/proses',[UploadController::class,'proses_upload']);
Route::get('/download/{file}',[UploadController::class,'download']);
Route::get('/terjemah', [TerjemahController::class,'index']);
Route::get('/formterjemah',[TerjemahController::class,'create']);
Route::post('store',[TerjemahController::class,'store']);
Route::get('/terjemah/destroy/{id}',[TerjemahController::class,'destroy']);
Route::get('/terjemah/pembayaran/{id}',[TerjemahController::class,'pembayaran']);
Route::get('/terjemah/show/{id}',[TerjemahController::class,'show']);
Route::get('/terjemah/edit7/{id}',[TerjemahController::class,'edit7']);
Route::post('/update7',[TerjemahController::class,'update7']);
Route::get('/terjemah/hasil/{id}',[TerjemahController::class,'hasil']);

Route::get('/dashboard2', [TaskController::class,'index']);
Route::post('task/store',[TaskController::class,'store']);
Route::post('store2',[CourseController::class,'store2']);
Route::get('form',[TaskController::class,'form']);
Route::get('form2',[CourseController::class,'form2']);
Route::get('table3',[TaskController::class,'table']);
Route::get('table2',[CourseController::class,'table2']);
Route::get('/tabletranslate/edit3/{NIM}',[TaskController::class,'edit']);
Route::get('/tablecourses/edit2/{NIM}',[CourseController::class,'edit2']);
Route::post('/update',[TaskController::class,'update']);
Route::post('/update2',[CourseController::class,'update2']);
Route::get('/tabletranslate/delete/{NIM}',[TaskController::class,'delete']);
Route::get('/tablecourses/delete2/{NIM}',[CourseController::class,'delete2']);

// User
Route::group(['as' => 'client.', 'middleware' => ['auth']], function () {
    Route::get('home', [HomeController::class,'redirect']);
    Route::get('dashboard', [HomeController::class,'index'])->name('home');
    Route::get('change-password', [ChangePasswordController::class,'create'])->name('password.create');
    Route::post('change-password', [ChangePasswordController::class,'update'])->name('password.update');
    Route::get('test', [TestsController::class,'index'])->name('test');
    Route::post('test', [TestsController::class,'store'])->name('test.store');
    Route::get('results/{result_id}', [ResultsController::class,'show'])->name('results.show');
    Route::get('send/{result_id}', [ResultsController::class,'send'])->name('results.send');
});

Auth::routes();

// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth.admin']], function () {
    Route::get('/', [HomeAdmin::class,'index'])->name('home');
    // Permissions
    Route::delete('permissions/destroy', [PermissionsController::class,'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [RolesController::class,'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [UsersController::class,'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

    // Categories
    Route::delete('categories/destroy', [CategoriesController::class,'massDestroy'])->name('categories.massDestroy');
    Route::resource('categories', CategoriesController::class);

    // Questions
    Route::delete('questions/destroy', [QuestionsController::class,'massDestroy'])->name('questions.massDestroy');
    Route::resource('questions', QuestionsController::class);

    // Options
    Route::delete('options/destroy', [OptionsController::class,'massDestroy'])->name('options.massDestroy');
    Route::resource('options', OptionsController::class);

    // Results
    Route::delete('results/destroy', [ResultAdmin::class,'massDestroy'])->name('results.massDestroy');
    Route::resource('results', ResultAdmin::class);
});
