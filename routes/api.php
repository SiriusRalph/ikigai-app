<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RecommendationController;
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

// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/questions', [QuestionController::class, 'index']);
//     Route::post('/questions', [QuestionController::class, 'store']);
//     Route::post('/recommendations', [RecommendationController::class, 'recommend']);
//     Route::get('/consultations', [ConsultationController::class, 'index']);
//     Route::post('/consultations', [ConsultationController::class, 'store']);
// });

// // Routes pour la gestion des profils des experts
// Route::get('/experts', [ExpertController::class, 'indexProfiles']);
// Route::post('/experts', [ExpertController::class, 'storeProfile']);
// Route::put('/experts/{profile}', [ExpertController::class, 'updateProfile']);
// Route::delete('/experts/{profile}', [ExpertController::class, 'destroyProfile']);
