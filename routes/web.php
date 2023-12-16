<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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
});


// Admin routes
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories');
Route::get('/admin/courses', [AdminController::class, 'courses'])->name('admin.courses');
Route::get('/admin/students', [AdminController::class, 'students'])->name('admin.students');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
Route::get('/admin/message', [AdminController::class, 'message'])->name('admin.message');
Route::get('/admin/plans', [AdminController::class, 'plans'])->name('admin.plans');


Route::get('/admin/categories', [AdminController::class, 'showCategories'])->name('admin.categories');
Route::post('/admin/categories', [AdminController::class, 'createCategory'])->name('admin.categories.create');
Route::put('/admin/categories/{id}', [AdminController::class, 'updateCategory'])->name('admin.categories.update');
Route::delete('/admin/categories/{id}', [AdminController::class, 'deleteCategory'])->name('admin.categories.delete');
