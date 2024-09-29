<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

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
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "name" => "Briant Jasper",
        "email" => "briantjasper5@gmail.com",
        "title" => "About",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        "title" => "Categories",
        "categories" => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', [PostController::class, 'category']);

Route::get('/authors/{author:username}', [PostController::class, 'author']);

// Login Route
Route::get('/login', function () {
    return view('login.index', [
        'title' => 'Login',
    ]);
})->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'login']);

// Register Route
Route::get('/register', function () {
    return view('register.index', [
        "title" => "Register",
    ]);
})->middleware('guest');

Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');
 
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');