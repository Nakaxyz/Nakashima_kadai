<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SquaredController;
use App\Http\Controllers\CubeController;
use App\Http\Controllers\CircleController;

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

Route::middleware(['middleware' => 'api'])->group(function () {
    Route::get('/squared', [SquaredController::class, 'index']);
    Route::get('/cube', [CubeController::class, 'index']);
    Route::get('/area_circle', [CircleController::class, 'index']);
  });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
