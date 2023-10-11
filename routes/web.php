<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[HomeController::class,'index'])->name('home');
/*Route::get('/blog',[HomeController::class,'blog'])->name('blog');*/
Route::get('/blog/details/{slug}',[HomeController::class,'blogDetails'])->name('blog.details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    /*Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');*/

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resources(['CATEGORIES'=>CategoryController::class]);
    Route::resources(['blogs'=>BlogController::class]);
    Route::get('/view',[UserController::class,'viewUser'])->name('view_user');
    Route::get('/add',[UserController::class,'addUser'])->name('add_user');
    Route::post('/add',[UserController::class,'storeUser'])->name('store_user');
});
