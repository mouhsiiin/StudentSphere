<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnnouncementController;


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
    return view('welcome');
})->name('home');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/profResModule/dashboard', function () {
        return view('profResModu.ProfResModudash');
    })->name('ProfResModule.dashboard');

    Route::get('/student/dashboard', function () {
        return view('student.studentdash');
    })->name('student.dashboard');
    
    Route::get('/chefDep/dashboard', function () {
        return view('chefDep.chefDepdash');
    })->name('chefDep.dashboard');

    Route::get('/Resfiliere/dashboard', function () {
        return view('Resfiliere.Resfilieredash');
    })->name('Resfiliere.dashboard');
    
    Route::get('/viceDoyan/dashboard', function () {
        return view('viceDoyan.viceDoyandash');
    })->name('viceDoyan.dashboard');
});


//announcments routing
Route::get('chefDep/announcements/create', [AnnouncementController::class, 'showCreateForm'])->name('chefDep.announcements.create');
Route::post('chefDep/announcements/create', [AnnouncementController::class, 'create']);