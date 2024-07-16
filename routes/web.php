<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuSearchController;
use App\Http\Controllers\NotificationsController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
})->name('root.login');

Route::get('home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// AQUI SE DEFINEN LAS RUTAS DE SISTEMA... El scaffolding de Spatie se hace cargo de los permisos
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);








    Route::match(['get', 'post'], '/navbar/search', [MenuSearchController::class, 'showNavbarSearchResults']);
    Route::prefix('notifications')->middleware(['auth', 'verified'])->name('notifications')->group(function (){
        Route::get('get', [NotificationsController::class, 'getNotificationsData'])->name('get');
        Route::get('show', [NotificationsController::class, 'showAll'])->name('show');
    });
});
