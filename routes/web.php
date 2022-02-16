<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use App\Models\Avatar;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, "home"])->name('home');
Route::get('/user/show/{id}', [UserController::class, "show"])->name('user.show');

Route::delete('/admin/destroy/{id}', [UserController::class, "destroy"])->name('users.destroy');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/users', [FrontController::class ,'users'])->middleware(['isAdmin'])->name('admin.users') ;
Route::get('/admin/myprofil', [FrontController::class ,'myprofil'])->middleware(['isAdmin'])->name('admin.myprofil') ;

Route::get('/admin/avatar', [FrontController::class ,'avatars'])->middleware(['isAdmin'])->name('admin.avatar') ;
Route::delete('/admin/avatar/destroy/{id}' ,[AvatarController::class , "destroy"])->name('avatar.destroy');
Route::post('/admin/avatar/store' ,[AvatarController::class , "store"])->name('avatar.store') ;
 ;

require __DIR__.'/auth.php';
