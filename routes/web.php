<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/', function () {
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
        if($role == 'admin')
            return redirect('admin/dashboard');
    });
});


Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [App\Http\Controllers\Admin\AdminController::class, 'allUser'])->name('user.all');
    Route::get('/product/create', [App\Http\Controllers\Admin\AdminController::class, 'create'])->name('create');
    Route::get('/product/manage', [App\Http\Controllers\Admin\AdminController::class, 'all_product'])->name('all_product');
    
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

