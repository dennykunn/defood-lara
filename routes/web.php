<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CuisineController;
use App\Http\Controllers\ErrorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;

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

// Error
Route::get('/admin', [ErrorController::class, 'index']);

// Auth Customer
Route::get('/login', [UserController::class, 'login'])->name('customer_login');
Route::post('/login', [UserController::class, 'process_login'])->name('customer_process_login');
Route::get('/register', [UserController::class, 'register'])->name('customer_register');
Route::post('/register', [UserController::class, 'process_register'])->name('customer_process_register');

// Customers or Users
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/menu', [MainController::class, 'menu'])->name('menu');
Route::get('/menu/{slug}', [MainController::class, 'menu_product'])->name('menu_product');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');

Route::group(['middleware' => 'user'], function () {
    // Logout
    Route::get('/logout', [UserController::class, 'logout'])->name('customer_logout');

    Route::get('/cart', [UserController::class, 'cart'])->name('cart');

    Route::get('/wishlist', [UserController::class, 'wishlist'])->name('wishlist');
    Route::post('/wishlist/{id}', [UserController::class, 'store_wishlist'])->name('store.wishlist');
    Route::delete('/wishlist/{id}', [UserController::class, 'delete_wishlist'])->name('delete.wishlist');

    Route::get('/notification', [UserController::class, 'notification'])->name('notification');
    Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');
    Route::post('/payment', [UserController::class, 'payment'])->name('payment');
    Route::get('/history', [UserController::class, 'history'])->name('history');
});

// Auth Admin
Route::get('/admin/login', [AdminController::class, 'login'])->name('login');
Route::post('/admin/login', [AdminController::class, 'process_login'])->name('process_login');

Route::group(['middleware' => 'admin'], function () {
    // Logout
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');

    // Admin
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Menus
    Route::get('/admin/menu/create', [MenuController::class, 'create'])->name('create-menu');
    Route::post('/admin/menu/create', [MenuController::class, 'store'])->name('store-menu');
    Route::get('/admin/menu/list', [MenuController::class, 'list'])->name('list-menu');
    Route::get('/admin/menu/{id}/edit', [MenuController::class, 'edit'])->name('edit-menu');
    Route::put('/admin/menu/{id}/update', [MenuController::class, 'update'])->name('update-menu');

    // Management Menu
    // Type
    Route::get('/admin/management-menu/type', [TypeController::class, 'index'])->name('type-list');
    Route::post('/admin/management-menu/type', [TypeController::class, 'store'])->name('type-add');
    Route::put('/admin/management-menu/type/{id}/edit', [TypeController::class, 'update'])->name('type-edit');
    Route::delete('/admin/management-menu/type/{id}/delete', [TypeController::class, 'destroy'])->name('type-delete');

    // Category
    Route::get('/admin/management-menu/category', [CategoryController::class, 'index'])->name('category-list');
    Route::post('/admin/management-menu/category', [CategoryController::class, 'store'])->name('category-add');
    Route::put('/admin/management-menu/category/{id}/edit', [CategoryController::class, 'update'])->name('category-edit');
    Route::delete('/admin/management-menu/category/{id}/delete', [CategoryController::class, 'destroy'])->name('category-delete');

    // Cuisine
    Route::get('/admin/management-menu/cuisine', [CuisineController::class, 'index'])->name('cuisine-list');
    Route::post('/admin/management-menu/cuisine', [CuisineController::class, 'store'])->name('cuisine-add');
    Route::put('/admin/management-menu/cuisine/{id}/edit', [CuisineController::class, 'update'])->name('cuisine-edit');
    Route::delete('/admin/management-menu/cuisine/{id}/delete', [CuisineController::class, 'destroy'])->name('cuisine-delete');
    // End Management Menu

    // Management Users
    // Admin
    Route::get('/admin/management-users/admin', [ManagementUserController::class, 'admin'])->name('management-users.admin');
    Route::post('/admin/management-users/admin', [ManagementUserController::class, 'store_admin'])->name('management-users.store');
    Route::put('/admin/management-users/admin', [ManagementUserController::class, 'update_admin'])->name('management-users.edit');
    Route::delete('/admin/management-users/admin/{id}/delete', [ManagementUserController::class, 'destroy'])->name('management-users.update');

    Route::get('/admin/management-users/customer', [ManagementUserController::class, 'customer'])->name('management-users.customer');
    Route::put('/admin/management-users/customer', [ManagementUserController::class, 'update_customer'])->name('management-users.update-customer');
});
