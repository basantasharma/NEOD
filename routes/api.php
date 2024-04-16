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

Route::get('/country/descriptions', [ApiController::class, 'getData'])->name('countryDescription');
Route::get('/country/{id}/descriptions', [ApiController::class, 'viewData'])->name('countryDescriptionId');


route::get('/proficencyTest/descriptions', [ApiController::class, 'testGetData'])->name('testGetData');
route::get('/proficencyTest/{exam}/images', [ApiController::class, 'testGetPhoto'])->name('testGetPhoto');
