<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Chef\ChefAsCustomerController;
use App\Http\Controllers\admin\HomeChefRequestController;
use App\Http\Controllers\Auth\HomeChefRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Chef\AddressController;

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

Route::group(['prefix' => 'artisan'], function () {
	 
     
 
	
    Route::get('clear', function () {
        //Artisan::call('view:clear');
       // Artisan::call('cache:clear');
       // Artisan::call('route:clear');
       // Artisan::call('config:clear');
		Artisan::call('passport:install');
        return 'Successfully Cleared !';
    });

    Route::get('migrate', function () {
        Artisan::call('migrate:fresh --seed');

        return 'Successfully Migrated !';
    });

    Route::get('link', function () {
        Artisan::call('storage:link');
        return 'Storage link successfully';
    });
});



Route::get('/', function () {
    return view('welcome');
});



Auth::routes(['verify' => true]);

Route::view('/resultpage', 'frontend/resultPage');
Route::view('password/reset-2', 'passwordReset');
Route::view('/verification', 'emailVerification');
Route::view('/chefprofile', 'frontend/chefProfile');
Route::view('/test', 'frontend/test');
Route::view('/test', 'frontend/test');
// Route::get('email/verify', [HomeController::class, 'show'])
//     ->middleware('auth')
//     ->name('verification.notice'); 

// --------------------user Dashboard------------------------//

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/change', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('password.change');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'change'])->name('passwords.update');

Route::get('chef/change', [App\Http\Controllers\HomeController::class, 'chefChangePassword'])->name('chef.password.change');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'chefChange'])->name('chef.password.update');

Route::get('admin/change', [App\Http\Controllers\HomeController::class, 'adminChangePassword'])->name('admin.password.change');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'adminChange'])->name('admin.password.update');



//Google
Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);

//facebook
Route::get('/login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

Route::Post('/homechef/dashboard', [HomeChefRegisterController::class, 'store'])->name('homechefreg');
Route::get('/homechef', [HomeChefRegisterController::class, 'create'])->name('create.homechefreg');

Route::group(['middleware' => 'auth'], function () {
    // --------------------Chef Dashboard------------------------//
    Route::view('/chef/dashboard', 'backend/dashboard');

    Route::get('/edit', [HomeChefRegisterController::class, 'edit'])->name('profile.edit');
    Route::post('profile/update', [HomeChefRegisterController::class, 'update'])->name('chef.profile.update');

    // --------------------Chef Dashboard As Customer------------------------//

    Route::group(['prefix' => 'chef', 'as' => 'chef.'], function () {
        Route::get('chef-as-customer', [ChefAsCustomerController::class, 'chefAsCustomer'])->name('chefAsCustomer');
        Route::resources([
            'address' => AddressController::class
        ]);
    });

    // --------------------Admin Dashboard------------------------//
    Route::resources([
        'chef/request' => HomeChefRequestController::class,
    ]);

    Route::get('chef/request', [HomeChefRequestController::class, 'index'])->name('request.index');
    Route::get('chef/index', [HomeChefRequestController::class, 'status'])->name('status.index');
    Route::Post('chef/request/update', [HomeChefRequestController::class, 'update'])->name('request.update');
    Route::post('chef/request/accept', [HomeChefRequestController::class, 'accept'])->name('request.chef');
});
