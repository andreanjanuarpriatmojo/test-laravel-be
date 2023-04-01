<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\InstructionController;
Route::group(['prefix' => 'instruction'], function () {
    Route::get('/', [InstructionController::class, 'index']);
    Route::get('/type', [InstructionController::class, 'type']);
    Route::get('/vendor', [InstructionController::class, 'vendor']);
    Route::get('/invoice', [InstructionController::class, 'invoice']);
    Route::get('/customer', [InstructionController::class, 'customer']);
    Route::get('/po', [InstructionController::class, 'po']);
});

use App\Http\Controllers\CostDetailController;
Route::group(['prefix' => 'cost'], function () {
    Route::get('/', [CostDetailController::class, 'index']);
    Route::get('/type', [CostDetailController::class, 'type']);
    Route::get('/uom', [CostDetailController::class, 'uom']);
    Route::get('/currency', [CostDetailController::class, 'currency']);
    Route::get('/chargeto', [CostDetailController::class, 'chargeto']);
});