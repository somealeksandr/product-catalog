<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('locale/{locale}', [MainController::class, 'changeLocale'])->name('locale');
Route::get('/logout', [LoginController::class, 'logout'])->name('get-logout');

Route::middleware(['set_locale'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::middleware('is_admin')->group(function () {
            Route::get('/dashboard', [HomeController::class, 'adminDashboard'])->name('dashboard');
            Route::resources([
                'users' => UserController::class,
                'products' => ProductController::class,
                'categories' => CategoryController::class,
            ]);
        });
    });

    Route::group(['middleware' => 'is_provider'], function () {
        Route::get('provider/dashboard', [HomeController::class, 'providerDashboard'])->name('provider.dashboard');
    });
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/categories', [MainController::class, 'categories'])->name('categories.index');

    Route::get('/{category}', [MainController::class, 'category'])->name('category');
    Route::get('/{category}/{product}', [MainController::class, 'product'])->name('product');
});
