<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/services', [UserController::class, 'services'])->name('services');
Route::get('/appointment', [UserController::class, 'appointment'])->name('appointment');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');


// Backend routes
Route::get('/404', [AdminController::class, 'error404'])->name('404');
Route::get('/blank', [AdminController::class, 'blank'])->name('blank');
Route::get('/button', [AdminController::class, 'button'])->name('button');
Route::get('/chart', [AdminController::class, 'chart'])->name('chart');
Route::get('/element', [AdminController::class, 'element'])->name('element');
Route::get('/form', [AdminController::class, 'form'])->name('form');
Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
Route::get('/signin', [AdminController::class, 'signin'])->name('signin');
Route::get('/signup', [AdminController::class, 'signup'])->name('signup');
Route::get('/table', [AdminController::class, 'table'])->name('table');
Route::get('/typography', [AdminController::class, 'typography'])->name('typography');
Route::get('/widget', [AdminController::class, 'widget'])->name('widget');

// Inquiries & Orders Routes
Route::get('/inquiries', [AdminController::class, 'inquiries'])->name('inquiries');
Route::get('/orders', [AdminController::class, 'orders'])->name('orders');

// Reports Routes
Route::get('/reports', [AdminController::class, 'reports'])->name('reports');

// Accounts Routes
Route::get('/accounts', [AdminController::class, 'accounts'])->name('accounts');
Route::get('/permissions', [AdminController::class, 'permissions'])->name('permissions');
Route::get('/create-account', [AdminController::class, 'createaccount'])->name('create-account');

// System Configuration & Backup Routes
Route::get('/system-configuration', [AdminController::class, 'systemConfiguration'])->name('system-configuration');
Route::get('/data-backup-restore', [AdminController::class, 'dataBackupRestore'])->name('data-backup-restore');


// SAVE DATA
Route::post('/registerUser',[AdminController::class,'userRegister']);

// User Edit
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit.user');
Route::post('/update/{id}', [AdminController::class, 'update'])->name('update.user');

// Route to view the profile of a specific user
Route::get('/user/{id}', [AdminController::class, 'show'])->name('user.show');

// Route to delete user profile
Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('user.destroy');
// Use POST for deleting a user to follow RESTful conventions
Route::post('/delete/{id}', [AdminController::class, 'destroy'])->name('user.destroy');


