<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\UserController;
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

// user area
Route::get('/welcome', function () {
    return view('welcome');
});



Route::post('registration', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('user.register');

// start middalewre area
Auth::routes();

Route::get('/', function() {
    return redirect('login');
});

Route::get('logout', function(Request $request) { 
    Auth::logout(); 
    session_unset();
    // $request->session()->regenerateToken();
    return redirect('/');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function(){
        $role = Auth::user()->role;
        if($role == 1)
            return redirect('admin/dashboard');
    });
});


Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [App\Http\Controllers\Admin\AdminController::class, 'allUser'])->name('user.all');
    Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'notify'])->name('user.notify');
    Route::post('/user/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');
    Route::get('/searchData/fetch/', [App\Http\Controllers\UserController::class, 'searchData']);
    Route::get('/product/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('create');
    Route::get('/product/manage', [App\Http\Controllers\Admin\AdminController::class, 'all_product'])->name('all_product');
    Route::post('/product/ref_sub_cat', [App\Http\Controllers\Admin\ProductController::class, 'ref_sub_category'])->name('product.ref_sub_cat');
    Route::post('/product/ref_product', [App\Http\Controllers\Admin\ProductController::class, 'ref_product'])->name('product.ref_product');
    Route::post('/product/productInput', [App\Http\Controllers\Admin\ProductController::class, 'productInput'])->name('product.inputview');
    Route::post('/product/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('product.store');
});
// end middalewre area


//clear cache
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

