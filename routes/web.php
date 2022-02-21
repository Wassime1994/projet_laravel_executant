<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImageController;
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
Route::post('/admin/users/{id}', [FrontController::class ,'update'])->name('user.update') ;
Route::get('/admin/myprofil', [FrontController::class ,'myprofil'])->name('admin.myprofil') ;
Route::get('/admin/avatar', [FrontController::class ,'avatars'])->middleware(['isAdmin'])->name('admin.avatar') ;
Route::delete('/admin/avatar/destroy/{id}' ,[AvatarController::class , "destroy"])->name('avatar.destroy');

Route::post('/admin/avatar/store' ,[AvatarController::class , "store"])->name('avatar.store') ;

Route::get('/user/image' , [ImageController::class , "index"])->name('image.index');
Route::get('/user/categorie' , [CategorieController::class , "index"])->middleware(['isAdmin'])->name('categorie.index');
Route::post('/user/categorie/store' , [CategorieController::class , "store"])->middleware(['isAdmin'])->name('categorie.store');

Route::delete('/user/categorie/destroy/{id}' , [CategorieController::class , "destroy"])->middleware(['isAdmin'])->name('categorie.destroy');
Route::get('/user/allImage/' , [ImageController::class , "all"])->middleware(['isAdmin'])->name('image.all');
Route::delete('/user/allImage/destroy/{id}' , [ImageController::class , "destroy"])->name('image.destroy');
Route::post('/user/allImage/store/{id}' , [ImageController::class , "store"])->name('image.store');




require __DIR__.'/auth.php';
