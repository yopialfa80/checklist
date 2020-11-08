<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api as Api;

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

 Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
 });

 
//Route::post('auth/login', 'frontend\Root@index');

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [Api\AuthController::class, 'login']);
    Route::post('signup', [Api\AuthController::class, 'signup']);
    
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::prefix('v1/web')->group(function () { 
        Route::prefix('/ceklist-kendaraan')->group(function () {
            Route::get('/list', [Api\CeklistKendaraan::class, 'index']);
            Route::get('/view/{id}', [Api\CeklistKendaraan::class, 'view']);
            Route::post('/save_header', [Api\CeklistKendaraan::class, 'save_header']);
            Route::post('/update_header/{id}', [Api\CeklistKendaraan::class, 'update_header']);
            Route::post('/update_checklistform/{id}', [Api\CeklistKendaraan::class, 'update_checklistform']);
            Route::get('/generate_url', [Api\CeklistKendaraan::class, 'generate_url']);
        });

        // Setting Web 
        Route::prefix('/setting-web')->group(function () {
            Route::get('/', [Api\SettingWeb::class, 'index']);
		    Route::post('/update/{id}', [Api\SettingWeb::class, 'update']);
        });

        // Setting Surat
        Route::prefix('/setting-surat')->group(function () {
		    Route::get('/', [Api\SettingSurat::class, 'index']);
		    Route::post('/update/{id}', [Api\SettingSurat::class, 'update']);
        });

        // Setting Peraturan
        Route::prefix('/setting-peraturan')->group(function () {
		    Route::get('/', [Api\SettingPeraturan::class, 'index']);
            Route::post('/update', [Api\SettingPeraturan::class, 'update']);
            Route::delete('/delete/{id}', [Api\SettingPeraturan::class, 'delete']);
        });

        // Setting Cabang
        Route::prefix('/setting-cabang')->group(function () {
		    Route::get('/{params}', [Api\SettingCabang::class, 'list']);
            Route::post('/update', [Api\SettingCabang::class, 'update']);
            Route::delete('/delete/{id}', [Api\SettingCabang::class, 'delete']);
        });

        // User
        Route::prefix('admin/user')->group(function () {
            Route::get('/list', [Api\Users::class, 'list']);
            Route::get('/view/{id}', [Api\Users::class, 'view']);
            Route::post('/create', [Api\Users::class, 'create']);
            Route::post('/update/{id}', [Api\Users::class, 'update']);
            Route::delete('/delete/{id}', [Api\Users::class, 'delete']);
        });

    });
});