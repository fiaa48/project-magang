<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Project;
use App\Models\Certificate;

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
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminUserController;

/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class,'index'])->name('home');

/*
|--------------------------------------------------------------------------
| ABOUT
|--------------------------------------------------------------------------
*/

Route::prefix('about')->group(function(){

    Route::get('/',[AboutController::class,'index'])->name('about');

    Route::get('/history',[AboutController::class,'history'])
        ->name('about.history');

    Route::get('/vision-mission',[AboutController::class,'visionMission'])
        ->name('about.vision-mission');

    Route::get('/organization',[AboutController::class,'organization'])
        ->name('about.organization');

});


/*
|--------------------------------------------------------------------------
| SERVICES
|--------------------------------------------------------------------------
*/

Route::prefix('services')->group(function(){

    Route::get('/',[ServicesController::class,'index'])->name('services');

    Route::get('/construction-consultancy',
        [ServicesController::class,'constructionConsultancy'])
        ->name('services.construction');

    Route::get('/non-construction-consultancy',
        [ServicesController::class,'nonConstructionConsultancy'])
        ->name('services.non-construction');

    Route::get('/architectural',
        [ServicesController::class,'architectural'])
        ->name('services.architectural');

    Route::get('/engineering',
        [ServicesController::class,'engineering'])
        ->name('services.engineering');

});


/*
|--------------------------------------------------------------------------
| PORTFOLIO
|--------------------------------------------------------------------------
*/

Route::prefix('portofolio')->group(function(){

    Route::get('/',[PortofolioController::class,'index'])
        ->name('portofolio');

    Route::get('/{id}',[PortofolioController::class,'show'])
        ->name('portofolio.details');

});


/*
|--------------------------------------------------------------------------
| CERTIFICATIONS
|--------------------------------------------------------------------------
*/

Route::get('/certifications',
    [CertificationController::class,'index'])
    ->name('certifications.index');

Route::get('/certifications/{type}',
    [CertificationController::class,'category'])
    ->name('certifications.category');

Route::get('/certifications/view/{id}',
    [CertificationController::class,'show'])
    ->name('certifications.view');

Route::get('/certifications/download/{id}',
    [CertificationController::class,'download'])
    ->name('certifications.download');


/*
|--------------------------------------------------------------------------
| COMPANY DATA
|--------------------------------------------------------------------------
*/

Route::prefix('company-data')->group(function(){

    Route::get('/',[CompanyDataController::class,'index'])
        ->name('company-data');

    Route::get('/legal-documents',
        [CompanyDataController::class,'legalDocuments'])
        ->name('company-data.legal');

    Route::get('/npwp-pkp',
        [CompanyDataController::class,'npwpPkp'])
        ->name('company-data.npwp-pkp');

});


/*
|--------------------------------------------------------------------------
| MANAGEMENT
|--------------------------------------------------------------------------
*/

Route::get('/management',
    [ManagementController::class,'index'])
    ->name('management');


/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
*/

Route::get('/contact',
    [ContactController::class,'index'])
    ->name('contact');

Route::post('/contact/send',
    [ContactController::class,'send'])
    ->name('contact.send');


/*
|--------------------------------------------------------------------------
| ADMIN LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', function(){
    return view('admin.login');
})->name('login');   // penting untuk middleware auth


Route::prefix('admin')->group(function(){

    Route::get('/login', function(){
        return view('admin.login');
    })->name('admin.login');


    Route::post('/login', function(Request $request){

        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error','Email atau password salah');

    })->name('admin.login.process');


    Route::post('/logout', function(){
        Auth::logout();
        return redirect()->route('home');
    })->name('admin.logout');

});


/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('/dashboard',function(){

        $totalUsers = User::count();
        $totalProjects = Project::count();
        $totalCertificates = Certificate::count();

        return view('admin.dashboard',compact(
            'totalUsers',
            'totalProjects',
            'totalCertificates'
        ));

    })->name('admin.dashboard');


    // projects
    Route::resource('projects',ProjectController::class)->names([
        'index'=>'admin.projects',
        'create'=>'admin.projects.create',
        'store'=>'admin.projects.store',
        'edit'=>'admin.projects.edit',
        'update'=>'admin.projects.update',
        'destroy'=>'admin.projects.destroy',
    ]);


    // certificates
    Route::resource('certificates',CertificateController::class)->names([
        'index'=>'admin.certificates',
        'create'=>'admin.certificates.create',
        'store'=>'admin.certificates.store',
        'edit'=>'admin.certificates.edit',
        'update'=>'admin.certificates.update',
        'destroy'=>'admin.certificates.destroy',
    ]);


    // profile
    Route::get('/profile',[AdminProfileController::class,'index'])
        ->name('admin.profile');

    Route::post('/profile/update',[AdminProfileController::class,'update'])
        ->name('admin.profile.update');


    // contacts
    Route::get('/contacts',[AdminContactController::class,'index'])
        ->name('admin.contacts');


    // users
    Route::get('/users',[AdminUserController::class,'index'])
        ->name('admin.users');


    // static pages
    Route::view('/messages','admin.messages')->name('admin.messages');
    Route::view('/reports','admin.reports')->name('admin.reports');
    Route::view('/settings','admin.settings')->name('admin.settings');
});
