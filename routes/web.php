<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\CompanyDataController;
use App\Http\Controllers\ProjectController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
    Route::get('/history', [AboutController::class, 'history'])->name('about.history');
    Route::get('/vision-mission', [AboutController::class, 'visionMission'])->name('about.vision-mission');
    Route::get('/organization', [AboutController::class, 'organization'])->name('about.organization');
});

// Services
Route::prefix('services')->group(function () {
    Route::get('/', [ServicesController::class, 'index'])->name('services');
    Route::get('/construction-consultancy', [ServicesController::class, 'constructionConsultancy'])->name('services.construction');
    Route::get('/non-construction-consultancy', [ServicesController::class, 'nonConstructionConsultancy'])->name('services.non-construction');
    Route::get('/architectural', [ServicesController::class, 'architectural'])->name('services.architectural');
    Route::get('/engineering', [ServicesController::class, 'engineering'])->name('services.engineering');
});

// Portofolio
Route::prefix('portofolio')->group(function () {
    Route::get('/', [PortofolioController::class, 'index'])->name('portofolio');
    Route::get('/{id}', [PortofolioController::class, 'show'])->name('portofolio.details');
});

// Certifications
Route::prefix('certifications')->group(function () {
    Route::get('/', [CertificationController::class, 'index'])->name('certifications');
    Route::get('/sbu', [CertificationController::class, 'sbu'])->name('certifications.sbu');
    Route::get('/iso', [CertificationController::class, 'iso'])->name('certifications.iso');
    Route::get('/legal', [CertificationController::class, 'legal'])->name('certifications.legal');
});

// Company Data
Route::prefix('company-data')->group(function () {
    Route::get('/', [CompanyDataController::class, 'index'])->name('company-data');
    Route::get('/legal-documents', [CompanyDataController::class, 'legalDocuments'])->name('company-data.legal');
    Route::get('/npwp-pkp', [CompanyDataController::class, 'npwpPkp'])->name('company-data.npwp-pkp');
});

// Management
Route::get('/management', [ManagementController::class, 'index'])->name('management');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

//Project
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');
