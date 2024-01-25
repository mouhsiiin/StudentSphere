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


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/profResModule/dashboard', function () {
        $user = Auth::user();
        return view('profResModu.ProfResModudash',[
            'announcements' => Announcement::all(),
            'userName' => $user ? $user->name : null
        ]);
    })->name('ProfResModule.dashboard');

    Route::get('/student/dashboard', function () {
        $user = Auth::user();
        return view('student.studentdash',[
            'announcements' => Announcement::all(),
            'userName' => $user ? $user->name : null
        ]);
    })->name('student.dashboard');
    
    Route::get('/chefDep/dashboard', function () {
        $user = Auth::user();
        return view('chefDep.chefDepdash',[
            'announcements' => Announcement::all(),
            'userName' => $user ? $user->name : null
        ]);
    })->name('chefDep.dashboard');

    Route::get('/Resfiliere/dashboard', function () {
        $user = Auth::user();
        return view('Resfiliere.Resfilieredash',[
            'announcements' => Announcement::all(),
            'userName' => $user ? $user->name : null
        ]);
    })->name('Resfiliere.dashboard');
    
    Route::get('/viceDoyan/dashboard', function () {
        $user = Auth::user();
        return view('viceDoyan.viceDoyandash',[
            'announcements' => Announcement::all(),
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





Route::get('/student/demandes/create', [DemandeController::class, 'create'])->name('demandes.create');
Route::post('/demandes', [DemandeController::class, 'store'])->name('demandes.store');

Route::get('/demandes', [DemandeController::class, 'index'])->name('demandes.index');




