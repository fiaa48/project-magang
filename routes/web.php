<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\User\AboutController as UserAboutController;
use App\Http\Controllers\User\ServicesController as UserServicesController;
// use App\Http\Controllers\User\PortofolioController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\ProjectsController as UserProjectsController;
use App\Http\Controllers\User\CertificationController as UserCertificationController;

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CertificationController as AdminCertificationController;
use App\Http\Controllers\Admin\ProjectsController as AdminProjectsController;
// use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ServicesController as AdminServicesController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\ChatbotController;
use App\Models\Contact;



/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/
Route::post('/chatbot', [ChatbotController::class, 'send'])->name('chatbot.send');
Route::get('/', [UserHomeController::class,'index'])->name('home');


/*
|--------------------------------------------------------------------------
| ABOUT
|--------------------------------------------------------------------------
*/

Route::prefix('about')->group(function () {

    Route::get('/', [UserAboutController::class,'index'])->name('about');

    Route::get('/history', [UserAboutController::class,'history'])
        ->name('about.history');

    Route::get('/vision-mission', [UserAboutController::class,'visionMission'])
        ->name('about.vision-mission');

    Route::get('/organization', [UserAboutController::class,'organization'])
        ->name('about.organization');

});


/*
|--------------------------------------------------------------------------
| SERVICES
|--------------------------------------------------------------------------
*/

Route::prefix('services')->group(function () {

    Route::get('/', [UserServicesController::class,'index'])
        ->name('services');

    Route::get('/construction-consultancy', [UserServicesController::class,'constructionConsultancy'])
        ->name('services.construction');

    Route::get('/non-construction-consultancy', [UserServicesController::class,'nonConstructionConsultancy'])
        ->name('services.non-construction');

    Route::get('/architectural', [UserServicesController::class,'architectural'])
        ->name('services.architectural');

    Route::get('/engineering', [UserServicesController::class,'engineering'])
        ->name('services.engineering');

});


// /*
// |--------------------------------------------------------------------------
// | PORTOFOLIO
// |--------------------------------------------------------------------------
// */

// Route::prefix('portofolio')->group(function () {

//     Route::get('/', [PortofolioController::class,'index'])
//         ->name('portofolio');

//     Route::get('/{id}', [PortofolioController::class,'show'])
//         ->name('portofolio.details');

// });


/*
|--------------------------------------------------------------------------
| PROJECTS (FRONTEND)
|--------------------------------------------------------------------------
*/

Route::get('/projects', [UserProjectsController::class, 'index'])
    ->name('projects');


/*
|--------------------------------------------------------------------------
| CERTIFICATIONS (FRONTEND)
|--------------------------------------------------------------------------
*/

Route::prefix('certifications')->name('certifications.')->group(function () {
    Route::get('/', [UserCertificationController::class, 'index'])->name('index');
    // Route::get('/category', [UserCertificationController::class, 'category'])->name('category');
    // Route::get('/list/{type}', [UserCertificationController::class, 'list'])->name('list');
    // Route::get('/view/{id}', [UserCertificationController::class, 'view'])->name('view');
    // Route::get('/download/{id}', [UserCertificationController::class, 'download'])->name('download');
    // Route::get('/iso', [UserCertificationController::class, 'iso'])->name('iso');
    // Route::get('/legal', [UserCertificationController::class, 'legal'])->name('legal');
    // Route::get('/nib', [UserCertificationController::class, 'nib'])->name('nib');
    // Route::get('/npwp', [UserCertificationController::class, 'npwp'])->name('npwp');
    // Route::get('/sbu', [UserCertificationController::class, 'sbu'])->name('sbu');
    // Route::get('/sbu-konstruksi', [UserCertificationController::class, 'sbuKonstruksi'])->name('sbu.konstruksi');
    // Route::get('/sbu-non-konstruksi', [UserCertificationController::class, 'sbuNonKonstruksi'])->name('sbu.non.konstruksi');
    // Route::get('/sertifikat-standar', [UserCertificationController::class, 'sertifikatStandar'])->name('sertifikat.standar');
    // Route::get('/spt', [UserCertificationController::class, 'spt'])->name('spt');
});


/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
*/

Route::get('/contact', [ContactController::class,'index'])->name('contact');

Route::post('/contact/send', [ContactController::class,'send'])
    ->name('contact.send');


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {

    /*
    |--------------------------------
    | AUTH
    |--------------------------------
    */

    Route::get('/login', function () {
        return view('admin.login.index');
    })->name('admin.login');


    Route::post('/login', function (Request $request) {
        if (Auth::attempt($request->only('email','password'))) {
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error','Email atau password salah');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('admin.dashboard');

        Route::post('/logout', function (Request $request) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('admin.login');
        })->name('admin.logout');
    });

    /*
    |--------------------------------
    | PROFILE ADMIN
    |--------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile.index');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('admin.profile.update');

    /*
    |--------------------------------
    | PROJECT ADMIN
    |--------------------------------
    */

    Route::get('/projects', [AdminProjectsController::class,'index'])
        ->name('admin.projects.index');

    Route::get('/projects/create', [AdminProjectsController::class,'create'])
        ->name('admin.projects.create');

    Route::post('/projects/store', [AdminProjectsController::class,'store'])
        ->name('admin.projects.store');

    Route::get('/projects/edit/{project}', [AdminProjectsController::class,'edit'])
        ->name('admin.projects.edit');

    Route::put('/projects/update/{project}', [AdminProjectsController::class,'update'])
        ->name('admin.projects.update');

    Route::delete('/projects/delete/{project}', [AdminProjectsController::class,'destroy'])
        ->name('admin.projects.destroy');


    /*
    |--------------------------------
    | SERTIFIKAT ADMIN
    |--------------------------------
    */

    Route::get('/certificates', [AdminCertificationController::class, 'index'])->name('admin.certificates.index');
    Route::get('/certificates/create', [AdminCertificationController::class, 'create'])->name('admin.certificates.create');
    Route::post('/certificates', [AdminCertificationController::class, 'store'])->name('admin.certificates.store');
    Route::get('/certificates/{id}/edit', [AdminCertificationController::class, 'edit'])->name('admin.certificates.edit');
    Route::put('/certificates/{id}', [AdminCertificationController::class, 'update'])->name('admin.certificates.update');
    Route::delete('/certificates/{id}', [AdminCertificationController::class, 'destroy'])->name('admin.certificates.destroy');

    // Route::get('/sertifikat/sbu', function () {
    //     return view('admin.sertifikat.sbu');
    // })->name('admin.sertifikat.sbu');

    // Route::get('/sertifikat/iso', function () {
    //     return view('admin.sertifikat.iso');
    // })->name('admin.sertifikat.iso');

    // Route::get('/sertifikat/legal', function () {
    //     return view('admin.sertifikat.legal');
    // })->name('admin.sertifikat.legal');

    // Route::get('/sertifikat/pdf', function () {
    //     return view('admin.sertifikat.pdf');
    // })->name('admin.sertifikat.pdf');

    /*
    |--------------------------------
    | BERANDA ADMIN
    |--------------------------------
    */

    Route::prefix('home')->name('admin.home.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        Route::get('/edit', [AdminHomeController::class, 'edit'])->name('edit');
        Route::put('/update', [AdminHomeController::class, 'update'])->name('update');
        Route::delete('/delete', [AdminHomeController::class, 'destroy'])->name('delete');
    });

    /*
    |--------------------------------
    | TENTANG PERUSAHAAN
    |--------------------------------
    */

    Route::prefix('about')->name('admin.about.')->group(function () {

        // PROFILE
        Route::get('/profile', [AdminAboutController::class, 'profileIndex'])->name('profile.index');
        Route::get('/profile/create', [AdminAboutController::class, 'profileCreate'])->name('profile.create');
        Route::post('/profile', [AdminAboutController::class, 'profileStore'])->name('profile.store');
        Route::get('/profile/{id}/edit', [AdminAboutController::class, 'profileEdit'])->name('profile.edit');
        Route::put('/profile/{id}', [AdminAboutController::class, 'profileUpdate'])->name('profile.update');
        Route::delete('/profile/{id}', [AdminAboutController::class, 'profileDelete'])->name('profile.delete');

        // HISTORY
        Route::get('/history', [AdminAboutController::class, 'historyIndex'])->name('history.index');
        Route::get('/history/create', [AdminAboutController::class, 'historyCreate'])->name('history.create');
        Route::post('/history', [AdminAboutController::class, 'historyStore'])->name('history.store');
        Route::get('/history/{id}/edit', [AdminAboutController::class, 'historyEdit'])->name('history.edit');
        Route::put('/history/{id}', [AdminAboutController::class, 'historyUpdate'])->name('history.update');
        Route::delete('/history/{id}', [AdminAboutController::class, 'historyDelete'])->name('history.delete');

        // VISION MISSION
        Route::get('/vision-mission', [AdminAboutController::class, 'visionIndex'])->name('vision.index');
        Route::get('/vision-mission/create', [AdminAboutController::class, 'visionCreate'])->name('vision.create');
        Route::post('/vision-mission', [AdminAboutController::class, 'visionStore'])->name('vision.store');
        Route::get('/vision-mission/{id}/edit', [AdminAboutController::class, 'visionEdit'])->name('vision.edit');
        Route::put('/vision-mission/{id}', [AdminAboutController::class, 'visionUpdate'])->name('vision.update');
        Route::delete('/vision-mission/{id}', [AdminAboutController::class, 'visionDelete'])->name('vision.delete');

        // ORGANIZATION
        Route::get('/organization', [AdminAboutController::class, 'organizationIndex'])->name('organization.index');
        Route::get('/organization/create', [AdminAboutController::class, 'organizationCreate'])->name('organization.create');
        Route::post('/organization', [AdminAboutController::class, 'organizationStore'])->name('organization.store');
        Route::get('/organization/{id}/edit', [AdminAboutController::class, 'organizationEdit'])->name('organization.edit');
        Route::put('/organization/{id}', [AdminAboutController::class, 'organizationUpdate'])->name('organization.update');
        Route::delete('/organization/{id}', [AdminAboutController::class, 'organizationDelete'])->name('organization.delete');

    });


    /*
    |--------------------------------
    | LAYANAN
    |--------------------------------
    */

    Route::prefix('services')->name('admin.services.')->group(function () {
        Route::get('/', [AdminServicesController::class, 'index'])->name('index');
        Route::get('/create', [AdminServicesController::class, 'create'])->name('create');
        Route::post('/store', [AdminServicesController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [AdminServicesController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [AdminServicesController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [AdminServicesController::class, 'destroy'])->name('delete');
        Route::get('/show/{id}', [AdminServicesController::class, 'show'])->name('show');
    });

    // /*
    // |--------------------------------
    // | SERTIFIKAT
    // |--------------------------------
    // */
    // Route::get('/certifications/category/{category}', function ($category) {
    //     return view('certifications.category');
    // })->name('certifications.category');

    /*
    |--------------------------------
    | MENU LAIN
    |--------------------------------
    */

    Route::get('/messages', function () {
        return view('admin.messages');
    })->name('admin.messages');

    Route::get('/reports', function () {
        return view('admin.reports');
    })->name('admin.reports');

    Route::get('/pengguna', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('/pengguna/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/pengguna/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::delete('/pengguna/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('/kontak', function (Request $request) {
        $search = $request->search;

        $messages = Contact::when($search, function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orWhere('subject', 'like', '%' . $search . '%')
                ->orWhere('message', 'like', '%' . $search . '%');
        })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.contacts.index', compact('messages'));
    })->name('admin.contacts.index');

    Route::delete('/kontak/{contact}', function (Contact $contact) {
        $contact->delete();

        return back()->with('success', 'Pesan kontak berhasil dihapus.');
    })->name('admin.contacts.destroy');

    Route::get('/notifikasi', function (Request $request) {
        $search = $request->search;

        $notifications = Contact::when($search, function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orWhere('subject', 'like', '%' . $search . '%')
                ->orWhere('message', 'like', '%' . $search . '%');
        })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.notifications.index', compact('notifications'));
    })->name('admin.notifications.index');

});
