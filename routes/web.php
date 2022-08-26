<?php

use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminSubCategoryController;
use App\Http\Controllers\admin\AdminProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\admin\AdminController;

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
})->name('main');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::get('admin-login'  , [AdminController::class , 'login'])->name('admin-login');
Route::post('admin-auth' , [AdminController::class , 'loginAuth'])->name('admin-auth');
Route::prefix('admin')->group(function ()
{
    Route::get('dashboard' , [AdminController::class , 'dashboard'])->name('dashboard');
    Route::get('admin-logout' , [AdminController::class, 'logout'])->name('admin-logout');

    Route::get('create-category' , [AdminCategoryController::class , 'create'])->name('create-category');
    Route::post('store-category' , [AdminCategoryController::class , 'store'])->name('store-category');
    Route::get('show-category' , [AdminCategoryController::class , 'show'])->name('show-category');
    Route::get('edit-category/{id}' , [AdminCategoryController::class , 'edit'])->name('edit-category');
    Route::post('update-category' , [AdminCategoryController::class , 'update'])->name('update-category');
    Route::get('delete-category/{id}' , [AdminCategoryController::class , 'destroy'])->name('delete-category');






    Route::get('create-subCategory' , [AdminSubCategoryController::class ,'create'])->name('create-subCategory');
    Route::post('store-subCategory' , [AdminSubCategoryController::class , 'store'])->name('store-subCategory');
    Route::get('show-sub-category' , [AdminSubCategoryController::class , 'show'])->name('show-subCategory');
    Route::get('edit-sub-category/{id}' , [AdminSubCategoryController::class ,'edit'])->name('edit-sub-category');
    Route::post('update-sub-category' , [AdminSubCategoryController::class ,'update'])->name('update-sub-category');
    Route::get('delete-sub-category/{id}' , [AdminSubCategoryController::class ,'destroy'])->name('delete-sub-category');


    Route::get('create-product' , [AdminProductController::class, 'create'])->name('create-product');
    Route::post('store-product' , [AdminProductController::class , 'store'])->name('store-product');
    Route::get('show-product' , [AdminProductController::class , 'show'])->name('show-product');
    Route::get('edit-product/{id}' , [AdminProductController::class , 'edit'])->name('edit-product');
    Route::post('update-product' , [AdminProductController::class , 'update'])->name('update-product');
    Route::get('delete-product/{id}' , [AdminProductController:: class, 'destroy'])->name('delete-product');




});

Route::get('dashboard'             ,[UserController::class,'dashboard'])->name('user_dashboard');
Route::get('logout'                ,[UserController::class, 'logout'])->name('logout');
Route::get('send-email'            ,[AdminController::class,'sendVerificationEmail'])->name('send-email');
Route::get('change-status'         ,[AdminController::class,'changeStatus'])->name('change-status');
