<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ServicesController;
use App\Http\Controllers\User\PortofolioController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\CertificationController;
// use App\Http\Controllers\User\ManagementController;
// use App\Http\Controllers\User\CompanyDataController;
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

// // Portofolio
// Route::prefix('portofolio')->group(function () {
//     Route::get('/', [PortofolioController::class, 'index'])->name('portofolio');
//     Route::get('/{id}', [PortofolioController::class, 'show'])->name('portofolio.details');
// });

//Project
Route::prefix('projects')->group(function () {
    Route::get('/', [PortofolioController::class, 'index'])->name('projects');
    Route::get('/{id}', [PortofolioController::class, 'show'])->name('projects.details');
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

// // Company Data
// Route::prefix('company-data')->group(function () {
//     Route::get('/', [CompanyDataController::class, 'index'])->name('company-data');
//     Route::get('/legal-documents', [CompanyDataController::class, 'legalDocuments'])->name('company-data.legal');
//     Route::get('/npwp-pkp', [CompanyDataController::class, 'npwpPkp'])->name('company-data.npwp-pkp');
// });

// // Management
// Route::get('/management', [ManagementController::class, 'index'])->name('management');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

// Route untuk guest (login)
Route::prefix('admin')->group(function () {
    // Login page (GET)
    Route::get('/login', function () {
        return view('admin.login.index');
    })->name('admin.login');

    // Login process (POST)
    Route::post('/login', function (Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error', 'Email atau password salah');
    });
});

// Route untuk admin yang sudah login (dilindungi auth)
Route::prefix('admin')->middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('home'); // atau 'user.home'
    })->name('admin.logout');

    // ===== PROFIL =====
    Route::prefix('profil')->name('admin.profil.')->group(function () {
        Route::get('/sejarah', function () {
            return view('admin.profil.sejarah');
        })->name('sejarah');

        Route::get('/visi-misi', function () {
            return view('admin.profil.visi-misi');
        })->name('visi-misi');

        Route::get('/organisasi', function () {
            return view('admin.profil.organisasi');
        })->name('organisasi');
    });

    // ===== LAYANAN =====
    Route::prefix('layanan')->name('admin.layanan.')->group(function () {
        Route::get('/', function () {
            return view('admin.layanan.index');
        })->name('index');

        Route::get('/konstruksi', function () {
            return view('admin.layanan.konstruksi');
        })->name('konstruksi');

        Route::get('/non-konstruksi', function () {
            return view('admin.layanan.non-konstruksi');
        })->name('non-konstruksi');

        Route::get('/arsitektural', function () {
            return view('admin.layanan.arsitektural');
        })->name('arsitektural');

        Route::get('/teknik', function () {
            return view('admin.layanan.teknik');
        })->name('teknik');
    });

    // ===== PROJECT =====
    Route::prefix('projects')->name('admin.projects.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\ProjectController::class, 'create'])->name('create');
        Route::post('/', [App\Http\Controllers\Admin\ProjectController::class, 'store'])->name('store');
        Route::get('/{project}/edit', [App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('edit');
        Route::put('/{project}', [App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('update');
        Route::delete('/{project}', [App\Http\Controllers\Admin\ProjectController::class, 'destroy'])->name('destroy');
    });

    // ===== SERTIFIKAT =====
    Route::prefix('sertifikat')->name('admin.sertifikat.')->group(function () {
        Route::get('/', function () {
            return view('admin.sertifikat.index');
        })->name('index');

        Route::get('/sbu', function () {
            return view('admin.sertifikat.sbu');
        })->name('sbu');

        Route::get('/iso', function () {
            return view('admin.sertifikat.iso');
        })->name('iso');

        Route::get('/legal', function () {
            return view('admin.sertifikat.legal');
        })->name('legal');

        Route::get('/pdf', function () {
            return view('admin.sertifikat.pdf');
        })->name('pdf');
    });

    // // ===== MANAJEMEN =====
    // Route::get('/management', function () {
    //     return view('admin.management.index');
    // })->name('admin.management.index');

    // ===== KONTAK =====
    Route::get('/kontak', function () {
        return view('admin.kontak.index');
    })->name('admin.kontak.index');

    // ===== FITUR TAMBAHAN (dari kode asli) =====
    Route::get('/certificates', function () {
        return view('admin.certificates');
    })->name('admin.certificates');

    Route::get('/messages', function () {
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
});

// // Management
// Route::prefix('admin')->name('admin.')->group(function(){
//     Route::resource('management', \App\Http\Controllers\Admin\ManagementController::class);
// });
