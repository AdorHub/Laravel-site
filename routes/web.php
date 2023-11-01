<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\Posts\PostController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Main\ProfileController;

#Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('main.profile')->middleware('auth');
Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('main.profile.show');

#MAIN
Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
    #Main
    Route::get('/', [MainController::class, 'index'])->name('main.index');
    Route::get('/{post}', [MainController::class, 'show'])->name('main.show');
    #Comments
    Route::post('/{post}', [MainController::class, 'store'])->name('main.comment.store');
});

#AUTH
Route::group(['namespace' => 'Auth'], function () {
    #Register
    Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    #Login
    Route::get('/login', [LoginController::class, 'create'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('login.logout');
});

#ADMIN
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [IndexController::class, 'index'])->name('admin.index');
    
    Route::group(['namespace' => 'Posts', 'prefix' => 'posts'], function () {
        Route::get('/', [PostController::class, 'index'])->name('admin.posts.index');
        Route::post('/', [PostController::class, 'store'])->name('admin.posts.store');
        Route::get('/create', [PostController::class, 'create'])->name('admin.posts.create');
        Route::get('/{post}', [PostController::class, 'show'])->name('admin.posts.show');
        #Comment
        Route::delete('/{comment}', [PostController::class, 'destroy'])->name('admin.comment.delete');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
        Route::patch('/{post}', [PostController::class, 'update'])->name('admin.posts.update');
        Route::delete('/{post}', [PostController::class, 'delete'])->name('admin.posts.delete');
    });
    Route::group(['namespace' => 'Users', 'prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.users.index');
        Route::delete('/{comment}', [UserController::class, 'delete'])->name('admin.users.delete');
        Route::get('/{user}/comments', [UserController::class, 'comments'])->name('admin.user.comments');
    });
});