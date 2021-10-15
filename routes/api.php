<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PaymentController;
use App\Http\Controllers\API\OfferController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', [AuthController::class, "login"])->name('login');
Route::post('signup', [AuthController::class, "signup"])->name('signup');
Route::post('verification', [AuthController::class, "Verifymail"])->name('verification');
Route::post('SendCode', [AuthController::class, "SendCode"])->name('SendCode');
Route::post('codeverifiction', [AuthController::class, "codeverifiction"])->name('codeverifiction');
Route::post('resetpassword', [AuthController::class, "resetpassword"])->name('resetpassword');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('user_detail', [AuthController::class, "user_detail"])->name('user_detail');
    Route::post('update_user', [AuthController::class, "update_user"])->name('update_user');
    Route::post('add_card', [PaymentController::class, "add_card"])->name('add_card');
    Route::post('view_card', [PaymentController::class, "view_card"])->name('view_card');
    Route::post('remove_card', [PaymentController::class, "remove_card"])->name('remove_card');
    Route::post('add_offer', [OfferController::class, "add_offer"])->name('add_offer');
	Route::post('Become_chef', [AuthController::class, "Become_chef"])->name('Become_chef');


       
});
