<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RewardHistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CkeditorController;

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

Route::post('ckeditor/image_upload', [CkeditorController::class, 'upload'])->name('upload-ckeditor');

// LOGIN LOGOUT
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/auth', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// REGISTER
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register/store', [UserController::class, 'store']);


// HOME & DASHBOARD
Route::get('/', [HomeController::class, 'index']);

// SUPER ADMIN
Route::group(['prefix' => 'super_admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'super_admin']);
    Route::get('/edit-profil', [UserController::class, 'edit']);
    Route::post('/update-profil', [UserController::class, 'update']);

    Route::get('/landing-page', [SuperAdminController::class, 'data_landing_page']);
    Route::post('/update-konten', [SuperAdminController::class, 'update_konten']);

    Route::get('/admin', [SuperAdminController::class, 'data_admin']);
    Route::get('/admin/{admin}', [SuperAdminController::class, 'edit_admin']);
    Route::post('/store-admin', [SuperAdminController::class, 'store_admin']);
    Route::post('/update-admin', [SuperAdminController::class, 'update_admin']);

    Route::get('/media-informasi', [SuperAdminController::class, 'data_media_informasi']);
    Route::get('/media-informasi/{media}', [SuperAdminController::class, 'edit_media_informasi']);
    Route::post('/store-media-informasi', [SuperAdminController::class, 'store_media_informasi']);
    Route::post('/update-media-informasi', [SuperAdminController::class, 'update_media_informasi']);

    Route::get('/tutorial', [SuperAdminController::class, 'data_tutorial']);
    Route::get('/tutorial/{tutorial}', [SuperAdminController::class, 'edit_tutorial']);
    Route::post('/store-tutorial', [SuperAdminController::class, 'store_tutorial']);
    Route::post('/update-tutorial', [SuperAdminController::class, 'update_tutorial']);

    Route::get('/reward', [SuperAdminController::class, 'data_reward']);
    Route::get('/reward/{reward}', [SuperAdminController::class, 'edit_reward']);
    Route::post('/store-reward', [SuperAdminController::class, 'store_reward']);
    Route::post('/update-reward', [SuperAdminController::class, 'update_reward']);

    Route::get('/katalog', [SuperAdminController::class, 'data_katalog']);
    Route::get('/katalog/{katalog}', [SuperAdminController::class, 'edit_katalog']);
    Route::post('/store-katalog', [SuperAdminController::class, 'store_katalog']);
    Route::post('/update-katalog', [SuperAdminController::class, 'update_katalog']);
    // Route::post('/products/update', [ProductController::class, 'update']);
});

// ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    // dashboard
    Route::get('/dashboard', [HomeController::class, 'admin']);

    // products
    Route::get('/notification', [ProductController::class, 'index']);
    Route::get('/notification/jemput/{notification}', [ProductController::class, 'edit_jemput']);
    Route::get('/notification/antar/{notification}', [ProductController::class, 'edit_antar']);
    Route::get('/notification/history/{notification}', [ProductController::class, 'show']);
    Route::post('/notification/update', [ProductController::class, 'update']);

    // user profile
    Route::get('/edit-profil', [UserController::class, 'edit']);
    Route::post('/update-profil', [UserController::class, 'update']);

    // rewards
    Route::get('/reward', [RewardHistoryController::class, 'admin']);
    Route::get('/reward/{reward}', [RewardHistoryController::class, 'admin_edit']);
    Route::get('/reward/history/{reward}', [RewardHistoryController::class, 'admin_show']);
    Route::post('/reward/update/{reward}', [RewardHistoryController::class, 'admin_update']);
});

// SUPPLIER
Route::group(['prefix' => 'supplier', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'supplier']);

    Route::get('/edit-profil', [UserController::class, 'edit']);
    Route::post('/update-profil', [UserController::class, 'update']);

    Route::post('/products/store', [ProductController::class, 'store']);

    Route::get('/reward', [SupplierController::class, 'reward']);
    Route::get('/reward/{reward}', [SupplierController::class, 'pilih_reward']);
    Route::get('/reward/history/{history}', [SupplierController::class, 'pilih_reward_history']);
    Route::post('/reward/tukar/{tukar}', [SupplierController::class, 'tukar_reward']);
});
// Route::get('/supplier/dashboard', [HomeController::class, 'supplier'])->middleware('auth');
Route::get('/buyer/dashboard', [HomeController::class, 'buyer'])->middleware('auth');

Route::get('/media-informasi', [GuestController::class, 'media_informasi']);
Route::get('/media-informasi/{media}', [GuestController::class, 'media_informasi_show']);
Route::get('/katalog', [GuestController::class, 'katalog']);
Route::get('/katalog/{katalog}', [GuestController::class, 'katalog_show']);
Route::get('/tentang', [GuestController::class, 'tentang']);
Route::get('/tutorial', [GuestController::class, 'tutorial']);
Route::get('/tutorial/detail/{tutorial}', [GuestController::class, 'tutorial_detail']);
Route::get('/kontak', [GuestController::class, 'kontak']);
// Route::get('/katalog', GuestController::class, 'katalog');
