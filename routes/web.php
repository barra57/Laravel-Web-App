<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageTest\LanguageTestController;
use App\Http\Controllers\LanguageTest\CreateLanguageTestController;
use App\Http\Controllers\LanguageTest\EditLanguageTestController;
use App\Http\Controllers\LanguageTest\DeleteLanguageTestController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CreateCourseController;
use App\Http\Controllers\EditCourseController;
use App\Http\Controllers\DeleteCourseController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\EditTaskController;
use App\Http\Controllers\DeleteTaskController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\CreateLogController;
use App\Http\Controllers\DeleteLogController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProccesUploadController;
use App\Http\Controllers\EditUploadController;
use App\Http\Controllers\DeleteUploadController;
use App\Http\Controllers\DownloadUploadController;
use App\Http\Controllers\TerjemahController;
use App\Http\Controllers\CreateTerjemahController;
use App\Http\Controllers\DeleteTerjemahController;
use App\Http\Controllers\EditTerjemahController;
use App\Http\Controllers\HasilTerjemahController;
use App\Http\Controllers\PembayaranTerjemahController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\PhotoController;
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

    Route::get('form4',[LogController::class,'form4']);
    Route::get('table4',[LogController::class,'table4']);
    Route::get('/logs/delete4/{NIM}',[DeleteLogController::class,'delete4']);
    Route::post('store4',[CreateLogController::class,'store4']);

    Route::get('/upload',[UploadController::class,'upload']);
    Route::post('/upload/proses',[ProccesUploadController::class,'proses_upload']);
    Route::get('/tabelfileupload/edit5/{id}',[EditUploadController::class,'edit5']);
    Route::post('/update5',[EditUploadController::class,'update5']);
    Route::get('/upload/delete5/{id}',[DeleteUploadController::class,'delete5']);    
    Route::get('/download/{file}',[DownloadUploadController::class,'download']);

    Route::get('/terjemah', [TerjemahController::class,'index']);
    Route::get('/formterjemah',[CreateTerjemahController::class,'create']);
    Route::post('store',[CreateTerjemahController::class,'store']);
    Route::get('/terjemah/destroy/{id}',[DeleteTerjemahController::class,'destroy']);
    Route::get('/terjemah/pembayaran/{id}',[PembayaranTerjemahController::class,'pembayaran']);
    Route::get('/terjemah/show/{id}',[TerjemahController::class,'show']);
    Route::get('/terjemah/edit7/{id}',[EditTerjemahController::class,'edit7']);
    Route::post('/update7',[EditTerjemahController::class,'update7']);
    Route::get('/terjemah/hasil/{id}',[HasilTerjemahController::class,'hasil']);

    Route::post('task/store',[CreateTaskController::class,'store']);
    Route::get('form',[TaskController::class,'form']);
    Route::get('table3',[TaskController::class,'table']);
    Route::get('/tabletranslate/edit3/{NIM}',[EditTaskController::class,'edit']);
    Route::get('/tabletranslate/delete/{NIM}',[DeleteTaskController::class,'delete']);

    Route::post('store2',[CreateCourseController::class,'store2']);
    Route::get('form2',[CourseController::class,'form2']);
    Route::get('table2',[CourseController::class,'table2']);
    Route::get('/tablecourses/edit2/{NIM}',[EditCourseController::class,'edit2']);
    Route::post('/update2',[EditCourseController::class,'update2']);
    Route::get('/tablecourses/delete2/{NIM}',[DeleteCourseController::class,'delete2']);

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
