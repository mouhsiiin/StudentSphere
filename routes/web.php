<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnnouncementController;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DemandeController;
use App\Models\Demande;

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

Route::get('/', function () { 
    $user = Auth::user();
    $announcements = Announcement::join('users', 'announcements.author_id', '=', 'users.id')
        ->where('users.role', 'chef_dep')
        ->select('announcements.*')
        ->get();

    return view('welcome', [
        'announcements' => $announcements
    ]);
    })->name('home');


// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profResModule/dashboard', function () {
        $user = Auth::user();
        return view('profResModu.ProfResModudash',[
            'announcements' => Announcement::latest()->get(),
            'userName' => $user ? $user->name : null
        ]);
    })->name('ProfResModule.dashboard');

    Route::get('/student/dashboard', function () {
        $user = Auth::user();
        return view('student.studentdash',[
            'announcements' => Announcement::latest()->get(),
            'userName' => $user ? $user->name : null
        ]);
    })->name('student.dashboard');
    
    Route::get('/chefDep/dashboard', function () {
        $user = Auth::user();
        return view('chefDep.chefDepdash',[
            'announcements' => Announcement::latest()->get(),
            'userName' => $user ? $user->name : null
        ]);
    })->name('chefDep.dashboard');

    Route::get('/Resfiliere/dashboard', function () {
        $user = Auth::user();
        return view('ResFiliere.ResFilieredash',[
            'announcements' => Announcement::latest()->get(),
            'userName' => $user ? $user->name : null
        ]);
    })->name('Resfiliere.dashboard');
    
    Route::get('/viceDoyan/dashboard', function () {
        $user = Auth::user();
        return view('viceDoyan.viceDoyandash',[
            'announcements' => Announcement::latest()->get(),
            'userName' => $user ? $user->name : null
        ]);
    })->name('viceDoyan.dashboard');
});


//announcments routing
Route::get('chefDep/announcements/create', [AnnouncementController::class, 'showCreateForm'])->name('chefDep.announcements.create');
Route::post('chefDep/announcements/create', [AnnouncementController::class, 'create']);

Route::get('profResModu/announcements/create', [AnnouncementController::class, 'showCreateForm'])->name('profResModu.announcements.create');
Route::post('profResModu/announcements/create', [AnnouncementController::class, 'create']);

Route::get('ResFiliere/announcements/create', [AnnouncementController::class, 'showCreateForm'])->name('ResFiliere.announcements.create');
Route::post('ResFiliere/announcements/create', [AnnouncementController::class, 'create']);



Route::get('/about',function(){
    return view('about');
})->name('about');



Route::get('/student/demandes/create', [DemandeController::class, 'create'])->name('demandes.create');
Route::post('/demandes', [DemandeController::class, 'store'])->name('demandes.store');

Route::get('/demandes', [DemandeController::class, 'index'])->name('demandes.index');

Route::get('filiers/affichageFiliere',function(){
     return view("filieres.affichageFiliere");
})->name('filiereShow');

Route::get('filiers/deust/MIP',function(){
    return view("filieres.deust.MIP");
});

Route::get('filiers/deust/MIPC',function(){
    return view("filieres.deust.MIPC");
});

Route::get('filiers/deust/GE-GM',function(){
    return view("filieres.deust.GE-GM");
});

Route::get('filiers/deust/BCG',function(){
    return view("filieres.deust.BCG");
});

Route::get('filiers/licence/AD',function(){
    return view("filieres.licence.AD");
});

Route::get('filiers/licence/IDAI',function(){
    return view("filieres.licence.IDAI");
});



