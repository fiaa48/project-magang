<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\CompanyDataController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CertificateController;

Route::prefix('admin')->group(function () {

    // Sertifikat CRUD
    Route::get('/certificates', [CertificateController::class, 'index'])->name('admin.certificates');
    Route::get('/certificates/create', [CertificateController::class, 'create'])->name('admin.certificates.create');
    Route::post('/certificates', [CertificateController::class, 'store'])->name('admin.certificates.store');
    Route::get('/certificates/{certificate}/edit', [CertificateController::class, 'edit'])->name('admin.certificates.edit');
    Route::put('/certificates/{certificate}', [CertificateController::class, 'update'])->name('admin.certificates.update');
    Route::delete('/certificates/{certificate}', [CertificateController::class, 'destroy'])->name('admin.certificates.destroy');

});

/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/

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

    Route::get('/', [CertificationController::class, 'index'])->name('certifications.index');
    Route::get('/sbu', [CertificationController::class, 'sbu'])->name('certifications.sbu');
    Route::get('/iso', [CertificationController::class, 'iso'])->name('certifications.iso');
    Route::get('/legal', [CertificationController::class, 'legal'])->name('certifications.legal');

    Route::get('/pdf/{slug}', [CertificationController::class, 'viewPdf'])
        ->name('certifications.view');

    Route::get('/download/{slug}', [CertificationController::class, 'downloadPdf'])
        ->name('certifications.download');
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



/*
|--------------------------------------------------------------------------
| ADMIN AUTH ROUTES
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    // Login Page
    Route::get('/login', function () {
        return view('admin.login');
    })->name('admin.login');

    // Login Process
    Route::post('/login', function (Request $request) {

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Email atau password salah');
    });

    // Dashboard (Protected)
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth')->name('admin.dashboard');

    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('home');
    })->name('admin.logout');

});

Route::get('</admin/projects', [ProjectController::class, 'index'])
        ->name('admin.projects');

    Route::get('/projects/create', [ProjectController::class, 'create'])
        ->name('admin.projects.create');

    Route::post('/projects', [ProjectController::class, 'store'])
        ->name('admin.projects.store');

    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])
        ->name('admin.projects.edit');

    Route::put('/projects/{project}', [ProjectController::class, 'update'])
        ->name('admin.projects.update');

    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])
        ->name('admin.projects.destroy');
    Route::get('/certificates', function () {
        return view('admin.certificates');
    })->name('admin.certificates');
    Route::get('/pesa', function () {
        return view('admin.messages');
    })->name('admin.messages');
    Route::get('/reports', function () {
        return view('admin.reports');
    })->name('admin.reports');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');
    Route::get('/users', function () {
        return view('admin.users');
    })->name('admin.users');
