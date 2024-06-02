<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RecommendationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/**User routes **/
// Route::middleware(['auth', 'verified'])->get('/dashboard', [DashboardController::class, 'userDashboard'])->name('dashboard');
// Route::middleware(['auth', 'verified'])->get('/test', [QuestionController::class, 'startTest'])->name('test.start');
// Route::middleware(['auth', 'verified'])->post('/recommend', [RecommendationController::class, 'recommend'])->name('recommend');
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->name('dashboard');
    Route::get('/test', [QuestionController::class, 'startTest'])->name('test.start');
    Route::post('/recommend', [RecommendationController::class, 'recommend'])->name('recommend');

    Route::post('/consultations/store', [ConsultationController::class, 'store'])->name('consultations.store');
    Route::get('/consultations/index', [ConsultationController::class, 'index'])->name('consultations.index');
    Route::get('/consultations/create/{expert_id}', [ConsultationController::class, 'create'])->name('consultations.create');
    Route::post('/consultations/cancel/{id}', [ConsultationController::class, 'cancel'])->name('consultations.cancel');
});

/**Expert routes **/ 
Route::middleware(['auth', 'expertAuth'])->prefix('expert')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'expertDashboard'])->name('expertDashboardShow');

    Route::get('/consultations', [ExpertController::class, 'expertConsultations'])->name('expert.consultations');
    Route::put('/consultations/{id}/done', [ExpertController::class, 'done'])->name('consultations.done');
});

/**Admin routes **/
Route::middleware(['auth', 'adminAuth'])->prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('adminDashboardShow');

    /** Routes for managing users **/
    Route::get('/users', [AdminController::class, 'indexUsers'])->name('admin.users.index');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('admin.createUser');
    Route::post('/users/store', [AdminController::class, 'storeUser'])->name('admin.storeUser');
    Route::delete('/users/{user}', [AdminController::class, 'destroyUser'])->name('admin.destroyUser');
    
    /**  Routes for managing expert Profiles **/
    Route::get('/profiles', [ExpertController::class, 'indexProfiles'])->name('experts.indexProfiles');
    Route::get('/profiles/create', [ExpertController::class, 'createProfile'])->name('experts.createProfile');
    Route::post('/profiles/store', [ExpertController::class, 'storeProfile'])->name('experts.storeProfile');
    Route::get('/profiles/{profile}/edit', [ExpertController::class, 'editProfile'])->name('experts.editProfile');
    Route::put('/profiles/{profile}', [ExpertController::class, 'updateProfile'])->name('experts.updateProfile');
    Route::delete('/profiles/{profile}', [ExpertController::class, 'destroyProfile'])->name('experts.destroyProfile');

    /**  Routes for managing test's questions **/
    Route::resource('questions', QuestionController::class);
    
    /**  Routes for managing consultations **/
    Route::get('/consultations', [AdminController::class, 'consultations'])->name('admin.consultations');
    Route::get('/consultations/cancelled', [AdminController::class, 'cancelledConsultations'])->name('admin.consultations.cancelled');
    Route::delete('/consultations/{id}', [ConsultationController::class, 'destroy'])->name('admin.consultations.destroy');
    // Route::get('/consultations/{id}/edit', [ConsultationController::class, 'edit'])->name('admin.consultations.edit');
    // Route::put('/consultations/{id}', [ConsultationController::class, 'update'])->name('admin.consultations.update');
});


require __DIR__.'/auth.php';