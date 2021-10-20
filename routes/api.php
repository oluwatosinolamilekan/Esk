<?php

use App\Http\Controllers\AdvertiseCampaignController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('advertise')->group(function () {
    Route::get('/index', [AdvertiseCampaignController::class, 'index']);
    Route::post('/store', [AdvertiseCampaignController::class, 'store']);
    Route::post('/show/{id}', [AdvertiseCampaignController::class, 'show']);
    Route::post('/edit/{id}', [AdvertiseCampaignController::class, 'edit']);
});
