<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::redirect('/login', '/admin/login')->name('login');


Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/registration-success', function () {
    return view('success');
})->name('registration.success');

// Voter resource routes
Route::resource('voters', VoterController::class)->except(['create', 'edit']);

// Get polling units by ward ID
Route::get('wards/{wardId}/polling-units', [VoterController::class, 'getPollingUnitsByWard']);

// Get wards by LGA name
Route::get('lgas/{lgaName}/wards', [VoterController::class, 'getWardsByLga']);

// Get CSRF token
Route::get('/csrf-token', function (Request $request) {
    return response()->json(['token' => csrf_token()]);
});


// Get available age ranges
Route::get('age-ranges', function () {
    return response()->json([
        'status' => 'success',
        'data' => [
            'age_ranges' => [
                ['value' => '18-25', 'label' => '18-25 years'],
                ['value' => '26-30', 'label' => '26-30 years'],
                ['value' => '31-40', 'label' => '31-40 years'],
                ['value' => '41-50', 'label' => '41-50 years'],
                ['value' => '51-60', 'label' => '51-60 years'],
                ['value' => '61-70', 'label' => '61-70 years'],
                ['value' => '71+', 'label' => '71+ years']
            ]
        ]
    ]);
});

Route::post('voters/save', [VoterController::class, 'saveVoter']);

