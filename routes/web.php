<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\MedicineGalleryController;
use App\Http\Controllers\Admin\MedicineRuleController;
use App\Http\Controllers\Admin\MedicineRuleDetailController;
use App\Http\Controllers\Admin\BloodPressureController;
use App\Http\Controllers\Admin\DiseaseController;
use App\Http\Controllers\Admin\UserListController;
use App\Http\Controllers\Admin\AgeController;
use App\Http\Controllers\Admin\WeightController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GrievenceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/consultation', [GrievenceController::class, 'index'])
    ->name('consultation');

Route::post('/consultation/consultation-detail', [GrievenceController::class, 'process'])
    ->name('process-consultation');

Route::get('consultation/consultation-disease/{id}', [GrievenceController::class, 'show'])
    ->name('choose-disease');

Route::get('consultation/consultation-disease/create/{id}', [GrievenceController::class, 'addProcess'])
    ->name('disease-add');

Route::get('blog', [BlogController::class, 'index'])
    ->name('blog');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
        
    Route::resource('user-list', UserListController::class);
        
    Route::resource('blood-pressure', BloodPressureController::class);

    Route::resource('disease', DiseaseController::class);

    Route::resource('medicine', MedicineController::class);
    
    Route::resource('medicine-gallery', MedicineGalleryController::class);

    Route::resource('medicine-rule', MedicineRuleController::class);

    Route::resource('medicine-rule-detail', MedicineRuleDetailController::class);
    
    Route::resource('age', AgeController::class);
    
    Route::resource('weight', WeightController::class);

});
