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

Route::get('/country/data', [ApiController::class, 'getCountry'])->name('getCountry');
Route::get('/all/descriptionlist/{country}', [ApiController::class, 'getList'])->name('countryDescriptionList');
Route::get('/all/descriptions/{country}', [ApiController::class, 'getData'])->name('countryDescription');
Route::get('/all/read/descriptionlist/{id}', [ApiController::class, 'getReadListData'])->name('countryDescriptionList');
Route::get('/all/descriptionlist/data/{country}', [ApiController::class, 'getListData'])->name('countryDescriptionListData');

