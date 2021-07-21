<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ControllerKP;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TaskController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('table',[ControllerKP::class,'index']);
Route::get('dataujian',[ControllerKP::class,'index2']);
Route::get('inputdataujian',[ControllerKP::class,'insert']);
Route::post('insertdb',[ControllerKP::class,'insertdb']);
Route::get('/dataujian/edit/{Nim}',[ControllerKP::class,'edit']);
Route::post('/update',[ControllerKP::class,'update']);
Route::get('/dataujian/hapus/{Nim}',[ControllerKP::class,'hapus']);

Route::get('/dashboard', [TaskController::class,'index']);
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
