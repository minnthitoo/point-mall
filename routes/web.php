<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\MerchantOwnerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiteOwnerController;
use App\Http\Controllers\SiteStaffController;

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

Route::redirect('/', 'login');

//admin
Route::get('/admin', function () {
    return view("admin.dashboard");
});

Route::get("/admin/user", function () {
    return view("admin.user");
});

Route::get("/admin/user/create", function () {
    return view("admin.user_create");
});

Route::get("/admin/config/region", function () {
    return view("admin.configuration.state");
})->name("admin#config#state");

Route::post("/admin/config/region", [RegionController::class, "store"]);


//jetstream middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [RoleController::class, 'dashboard']);

    //admin middleware
    Route::middleware(['admin_middleware'])->group(function(){
        //admin
        Route::get('admin/home', function(){
            return view('admin.user');
        });
    });

    //member middleware
    Route::middleware(['user_middleware'])->group(function () {
        //member
        Route::prefix('member')->group(function () {
            Route::get('home', [MemberController::class, 'home'])->name('member#home');
        });
    });

    //merchant_owner
    Route::prefix('merchant_owner')->group(function () {
        Route::get('home', [MerchantOwnerController::class, 'home'])->name('merchant_owner#home');
    });


    //site_owner
    Route::prefix('site_owner')->group(function () {
        Route::get('home', [SiteOwnerController::class, 'home'])->name('site_owner#home');
    });

    //site_staff
    Route::prefix('site_staff')->group(function () {
        Route::get('home', [SiteStaffController::class, 'home'])->name('site_staff#home');
    });
});
