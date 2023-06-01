<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\MainController;

use Admin\CategoryController;
use Admin\TagController;
use Admin\ContactController as AdminContactController;
use Admin\PostController as AdminPostController;


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
})->name('home');

Route::get('/contacts', [ContactController::class, 'create'])->name('contacts');

Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/about', [PostController::class, 'index'])->name('posts');
Route::get('/article/{slug}', [PostController::class, 'show'])->name('posts.single');
Route::get('/allpoints', [PostController::class, 'showall'])->name('posts.all');

// Route::get('/about', 'PostController@index')->name('posts');
// Route::get('/article/{slug}', 'PostController@show')->name('posts.single');
// Route::get('/allpoints', 'PostController@showall')->name('posts.all');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    // Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    // Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', TagController::class);
    // Route::resource('/tags', 'TagController');
    Route::resource('/posts', AdminPostController::class);
    // Route::resource('/posts', 'PostController');
    Route::resource('/contact', AdminContactController::class);
    // Route::resource('/contact', 'ContactController');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');
    Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/register', 'UserController@create')->name('register.create');
//     Route::post('/register', 'UserController@store')->name('register.store');
//     Route::get('/login', 'UserController@loginForm')->name('login.create');
//     Route::post('/login', 'UserController@login')->name('login');
//     Route::get('/logout', 'UserController@logout')->name('logout');
// });

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');