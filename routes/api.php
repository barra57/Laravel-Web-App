<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Api\V1\Admin\PermissionsController;
use App\Http\Api\V1\Admin\RolesController;
use App\Http\Api\V1\Admin\CategoriesController;
use App\Http\Api\V1\Admin\OptionsController;
use App\Http\Api\V1\Admin\QuestionsController;
use App\Http\Api\V1\Admin\ResultsController;
use App\Http\Api\V1\Admin\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', PermissionsApiController::class);

    // Roles
    Route::apiResource('roles', RolesApiController::class);

    // Users
    Route::apiResource('users', UsersApiController::class);

    // Categories
    Route::apiResource('categories', CategoriesApiController::class);

    // Questions
    Route::apiResource('questions', QuestionsApiController::class);

    // Options
    Route::apiResource('options', OptionsApiController::class);

    // Results
    Route::apiResource('results', ResultsApiController::class);
});
