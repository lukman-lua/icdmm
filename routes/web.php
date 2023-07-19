<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('About', function () {
    return view('about');
})->name("about");

Route::get('Services', function () {
    return view('services');
})->name("services");

Route::get('Blog', function () {
    return view('blog');
})->name("blog");

Route::get('Scope and Topics', function () {
    return view('scopeandtopics');
})->name("scopeandtopics");

Route::get('Pojects', function () {
    return view('projects');
})->name("projects");

Route::get('Contact', function () {
    return view('contact');
})->name("contact");

// For Register
Route::get('Registration Page', function () {
    return view('registrasionpages');
})->name("regispage");

Route::get('Registration', function () {
    return view('registrasion');
})->name("regis");

Route::get('Login', function () {
    return view('login');
})->name("login");

// POST ini
Route::post('Register',
    [UserController::class, 'register']
)->name('register');

Route::post('login',
    [UserController::class, 'login']
)->name('login_p');

// Grup rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {

    Route::get('Dashboard',
        [ProfileController::class, 'dashboardpeserta']
    )->name('dashboardpeserta');

    Route::get('Verification',
        [ProfileController::class, 'view']
    )->name('verification');

    Route::post('verify',
        [ProfileController::class, 'verify']
    )->name('verify');

    Route::get('Logout',
        [UserController::class, 'logout']
    )->name('logout');

    Route::middleware(['verified'])->group(function () {

        Route::get('Submit Paper',
            [PaperController::class, 'view']
        )->name('submitpaper');

        Route::post('Submit Paper',
            [PaperController::class, 'submit']
        )->name('submit_paper');

    });

    Route::middleware(['admin'])->group(function () {

        Route::get('Ald', function () {
            return view('dashboardadmin');
        })->name("dashboardadmin");

        Route::get('Ald/User',
            [AdminController::class, 'alluser']
        )->name('alluser');

        Route::get('Ald/Paper',
            [AdminController::class, 'paper']
        )->name('paper');

        Route::get('Ald/Validation',
            [AdminController::class, 'validation']
        )->name('validation');

        Route::get('Ald/Validation/acc/{username}',
            [AdminController::class, 'val_acc']
        )->name('val_acc');

        Route::get('Ald/Validation/reject/{username}',
            [AdminController::class, 'val_dec']
        )->name('val_dec');

    });

});







