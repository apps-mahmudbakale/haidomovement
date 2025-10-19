<?php

use App\Http\Controllers\Api\VoterController;
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

Route::apiResource('voters', VoterController::class);

// Additional custom routes can be added here
Route::get('voters/search/{query}', [VoterController::class, 'search']);
