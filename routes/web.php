<?php

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
});

Route::get('dashboard'             ,[UserController::class,'dashboard'])->name('user_dashboard');
Route::get('logout'                ,[UserController::class, 'logout'])->name('logout');
Route::get('send-email'            ,[AdminController::class,'sendVerificationEmail'])->name('send-email');
Route::get('change-status'         ,[AdminController::class,'changeStatus'])->name('change-status');
