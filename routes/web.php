<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaintServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceCollectionController;

// Public user website routes
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/user/Userindex', [UserController::class, 'index'])->name('Userindex');
Route::get('/user/about', [UserController::class, 'about'])->name('User.about');
Route::get('/user/Gallery', [UserController::class, 'gallery'])->name('User.Gallery');
Route::get('/user/Collection', [UserController::class, 'Collection'])->name('User.Collection');
Route::get('/user/service', [UserController::class, 'service'])->name('User.service');
Route::get('/user/contact', [UserController::class, 'contact'])->name('User.contact');
Route::get('/user/feedback', [UserController::class, 'feedback'])->name('User.feedback');
Route::get('/frontend-videos', [UserController::class, 'frontendVideos'])->name('frontend.videos');

// ServiceCollection routes (user & admin)
Route::get('/user/service-collection', [ServiceCollectionController::class, 'create'])->name('service-collection.create');
Route::post('/user/service-collection', [ServiceCollectionController::class, 'store'])->name('service-collection.store');
Route::get('/admin/service-collection', [ServiceCollectionController::class, 'index'])->name('service-collection.index');
Route::delete('/admin/service-collection/{id}', [ServiceCollectionController::class, 'deleteService'])->name('service-collection.delete');

// Paint services routes
Route::resource('paint-services', PaintServiceController::class);
Route::get('/services', [PaintServiceController::class, 'userServices'])->name('services');

// Contact routes (user & admin)
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

// Feedback routes
Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/feedback/approve/{id}', [FeedbackController::class, 'approve'])->name('feedback.approve');
Route::delete('/admin/feedbacks/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

// Video routes
Route::resource('videos', VideoController::class);
Route::get('/frontend-videos', [VideoController::class, 'frontend'])->name('frontend.videos');

// Authenticated user profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes protected by auth and admin middleware
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    // Admin dashboard
    Route::get('/Admindashboard', [AdminController::class, 'admin'])->name('Admindashboard');

    // Feedback management
    Route::get('/feedbacks', [AdminController::class, 'index'])->name('admin.feedbacks');
    Route::post('/feedback/{id}/approve', [FeedbackController::class, 'approve'])->name('feedback.approve');
    Route::delete('/feedback/{id}/delete', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

    // Image resource routes
    Route::resource('images', ImageController::class);

    // Service resource routes
    Route::resource('services', ServiceController::class);

    // User management routes
    Route::prefix('users')->group(function () {
        Route::get('/', [AdminController::class, 'admin'])->name('admin.users.index'); // List users
        Route::get('/user/create', [AdminController::class, 'usercreate'])->name('admin.users.usercreate'); // Create form
        Route::post('/', [AdminController::class, 'store'])->name('admin.users.store'); // Store new user
        Route::get('{id}/edit', [AdminController::class, 'edit'])->name('admin.users.edit');
        Route::put('{id}', [AdminController::class, 'update'])->name('admin.users.update');
        Route::delete('{id}', [AdminController::class, 'destroy'])->name('admin.users.destroy'); // Delete user
    });

    // Category CRUD routes
    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

    // Additional admin pages
    Route::get('/category', [AdminController::class, 'category'])->name('admin.category');
    Route::get('/table', [AdminController::class, 'table'])->name('admin.table');
    Route::get('/button', [AdminController::class, 'button'])->name('admin.button');
    Route::get('/charts', [AdminController::class, 'Chart'])->name('admin.charts');
    Route::get('/form', [AdminController::class, 'form'])->name('admin.form');
    Route::get('/signin', [AdminController::class, 'signin'])->name('admin.signin');

    // Contact management for admin
    Route::get('/contacts', [AdminController::class, 'table'])->name('admin.contacts');
    Route::post('/contact/store', [AdminController::class, 'storeContact'])->name('contact.store');
    Route::get('/contact/{id}/update', [AdminController::class, 'updateContact'])->name('admin.contacts.update');
    Route::delete('/contact/{id}/delete', [AdminController::class, 'destroyContact'])->name('admin.contacts.destroy');

});

// Finally, require auth routes
require __DIR__.'/auth.php';
