<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageTest\LanguageTestController;
use App\Http\Controllers\LanguageTest\CreateLanguageTestController;
use App\Http\Controllers\LanguageTest\EditLanguageTestController;
use App\Http\Controllers\LanguageTest\DeleteLanguageTestController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Course\CreateCourseController;
use App\Http\Controllers\Course\EditCourseController;
use App\Http\Controllers\Course\DeleteCourseController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\EditTaskController;
use App\Http\Controllers\DeleteTaskController;
use App\Http\Controllers\Log\LogController;
use App\Http\Controllers\Log\CreateLogController;
use App\Http\Controllers\Log\DeleteLogController;
use App\Http\Controllers\Upload\UploadController;
use App\Http\Controllers\Upload\ProccesUploadController;
use App\Http\Controllers\Upload\EditUploadController;
use App\Http\Controllers\Upload\DeleteUploadController;
use App\Http\Controllers\Upload\DownloadUploadController;
use App\Http\Controllers\Translate\TerjemahController;
use App\Http\Controllers\Translate\CreateTerjemahController;
use App\Http\Controllers\Translate\DeleteTerjemahController;
use App\Http\Controllers\Translate\EditTerjemahController;
use App\Http\Controllers\Translate\HasilTerjemahController;
use App\Http\Controllers\Translate\PembayaranTerjemahController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\chart\chartkursus;
use App\Http\Controllers\chart\chartterjemahan;
use App\Http\Controllers\chart\charttes;
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

    Route::get('languagetest/index',[LanguageTestController::class,'index']);
    Route::get('languagetest/create',[CreateLanguageTestController::class,'create']);
    Route::post('languagetest/store',[CreateLanguageTestController::class,'store']);
    Route::get('languagetest/index/edit/{No}',[EditLanguageTestController::class,'edit']);
    Route::post('/update',[EditLanguageTestController::class,'update']);
    Route::get('languagetest/index/destroy/{No}',[DeleteLanguageTestController::class,'destroy']);

    Route::get('log/create',[CreateLogController::class,'create']);
    Route::get('log/index',[LogController::class,'index']);
    Route::get('log/index/destroy/{NIM}',[DeleteLogController::class,'destroy']);
    Route::post('log/store',[CreateLogController::class,'store']);

    Route::get('upload/index',[UploadController::class,'index']);
    Route::post('upload/index/proses',[ProccesUploadController::class,'proses_upload']);
    Route::get('upload/index/edit/{id}',[EditUploadController::class,'edit']);
    Route::post('/update',[EditUploadController::class,'update']);
    Route::get('upload/index/destroy/{id}',[DeleteUploadController::class,'destroy']);    
    Route::get('upload/index/download/{file}',[DownloadUploadController::class,'download']);

    Route::get('translate/index', [TerjemahController::class,'index']);
    Route::get('translate/create',[CreateTerjemahController::class,'create']);
    Route::post('store',[CreateTerjemahController::class,'store']);
    Route::get('translate/destroy/{id}',[DeleteTerjemahController::class,'destroy']);
    Route::get('translate/payment/{id}',[PembayaranTerjemahController::class,'payment']);
    Route::get('translate/show/{id}',[TerjemahController::class,'show']);
    Route::get('translate/edit/{id}',[EditTerjemahController::class,'edit']);
    Route::post('translate/update',[EditTerjemahController::class,'update']);
    Route::get('translate/result/{id}',[HasilTerjemahController::class,'result']);

    Route::post('task/store',[CreateTaskController::class,'store']);
    Route::get('form',[TaskController::class,'form']);
    Route::get('table3',[TaskController::class,'table']);
    Route::get('/tabletranslate/edit3/{NIM}',[EditTaskController::class,'edit']);
    Route::get('/tabletranslate/delete/{NIM}',[DeleteTaskController::class,'delete']);

    Route::get('course/index',[CourseController::class,'index']);
    Route::post('course/store',[CreateCourseController::class,'store']);
    Route::get('course/create',[CreateCourseController::class,'create']);
    Route::get('course/index',[CourseController::class,'index']);
    Route::get('course/index/edit/{NIM}',[EditCourseController::class,'edit']);
    Route::post('/update',[EditCourseController::class,'update']);
    Route::get('course/index/destroy/{NIM}',[DeleteCourseController::class,'destroy']);

    Route::get('chart/chartkursus',[chartkursus::class,'index']);
    Route::get('chart/chartterjemahan',[chartterjemahan::class,'index']);
    Route::get('chart/charttes',[charttes::class,'index']);


    Route::resource('photo', 'PhotoController');
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
