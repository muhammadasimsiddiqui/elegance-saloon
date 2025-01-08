<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
// Route::get('/', function () {
//     return view('frontend.home');
// })->name('home');

// Route::get('/about', function () {
//     return view('frontend.about');
// })->name('about');

// Route::get('/services', function () {
//     return view('frontend.services');
// })->name('services');

// Route::get('/appointment', function () {
//     return view('frontend.appointment');
// })->name('appointment');

// Route::get('/contact', function () {
//     return view('frontend.contact');
// })->name('contact');

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/services', [UserController::class, 'services'])->name('services');
Route::get('/appointment', [UserController::class, 'appointment'])->name('appointment');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');

// Backend Routes
// Route::get('/404', function () {
//     return view('backend.404');
// })->name('404');

// Route::get('/blank', function () {
//     return view('backend.blank');
// })->name('blank');

// Route::get('/button', function () {
//     return view('backend.button');
// })->name('button');

// Route::get('/chart', function () {
//     return view('backend.chart');
// })->name('chart');

// Route::get('/element', function () {
//     return view('backend.element');
// })->name('element');

// Route::get('/form', function () {
//     return view('backend.form');
// })->name('form');

// Route::get('/index', function () {
//     return view('backend.index');
// })->name('index');

// Route::get('/signin', function () {
//     return view('backend.signin');
// })->name('signin');

// Route::get('/signup', function () {
//     return view('backend.signup');
// })->name('signup');

// Route::get('/table', function () {
//     return view('backend.table');
// })->name('table');

// Route::get('/typography', function () {
//     return view('backend.typography');
// })->name('typography');

// Route::get('/widget', function () {
//     return view('backend.widget');
// })->name('widget');

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
Route::get('/inquiries', [AdminController::class, 'inquiries'])->name('inquiries');
Route::get('/orders', [AdminController::class, 'inquiries'])->name('orders');
Route::get('/accounts', [AdminController::class, 'accounts'])->name('accounts');
Route::get('/create-account', [AdminController::class, 'createaccount'])->name('create-account');
