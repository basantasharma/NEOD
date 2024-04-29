<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/all/descriptions/{country}', [ApiController::class, 'getData'])->name('countryDescription');
Route::get('/different/pages', [ApiController::class, 'getPage'])->name('differentPage');
Route::get('/main/page', [ApiController::class, 'mainPage'])->name('mainPage');
Route::get('/every/country/data/{country}', [ApiController::class, 'getCountryData'])->name('countryData');



