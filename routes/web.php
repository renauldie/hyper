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
use App\Http\Controllers\Admin\DosageController;
use App\Http\Controllers\Admin\UserConsultationController;
use App\Http\Controllers\Admin\DosageDetailController;
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

// Consultation 
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/consultation', [GrievenceController::class, 'index'])
    ->name('consultation');

Route::post('/consultation/consultation-detail', [GrievenceController::class, 'process'])
    ->name('process-consultation');

Route::get('consultation/consultation-disease/{id}', [GrievenceController::class, 'show'])
    ->name('choose-disease');

Route::post('consultation/consultation-disease/create/{id}', [GrievenceController::class, 'addProcess'])
    ->name('disease-add');

Route::get('consultation/consultation-disease/delete/{id}', [GrievenceController::class, 'deleteProcess'])
    ->name('disease-delete');

Route::get('consultation/consultation-disease/check/{id}', [GrievenceController::class, 'checkResult'])
    ->name('disease-result');

Route::get('consultation/consultation-disease/dosage/{id}', [GrievenceController::class, 'checkDosage'])
    ->name('dosage-result');

Route::get('consultation-record/{id}', [GrievenceController::class, 'record'])
    ->name('consultation-record');
    
// Obat gallery
Route::get('blog', [BlogController::class, 'index'])
    ->name('blog');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
        
    Route::resource('blood-pressure', BloodPressureController::class);
    
    Route::resource('disease', DiseaseController::class);
    
    Route::resource('medicine', MedicineController::class);
    
    Route::resource('medicine-gallery', MedicineGalleryController::class);
    
    Route::resource('medicine-rule', MedicineRuleController::class);
    
    Route::resource('medicine-rule-detail', MedicineRuleDetailController::class);
    
    Route::resource('age', AgeController::class);
    
    Route::resource('weight', WeightController::class);
    
    Route::resource('dosage-list', DosageController::class);
    
    Route::resource('dosage-detail', DosageDetailController::class);
    
    Route::resource('user-list', UserListController::class);
    
    Route::resource('user-consultation', UserConsultationController::class);

});

//to download file admin
Route::get('/user-consultation/export_excel', [UserConsultationController::class, 'export_excel'])
->name('consultation-export');

Route::get('/user/export_excel', [UserListController::class, 'export_pdf'])
->name('user-export');

Route::get('/medicine/export_excel', [MedicineController::class, 'export_pdf'])
->name('medicine-export');

Route::get('/ususer-consultationer/export_pdf/{cons}', [GrievenceController::class, 'export_pdf'])
->name('consultation-end');
