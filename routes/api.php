<?php

use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\PaymentAgentController;
use App\Http\Controllers\SellingOrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceOrderController;
use App\Http\Controllers\UserController;
use App\Models\SellingOrder;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::controller(UserController::class)->group(function()
{
    Route::post('/login', 'post_credential');
   // Route::get('/user', 'get_user');

});
//Route::middleware('auth:api')->get('/user', [UserController::class, 'get_user']);

Route::middleware(['auth:api'])->group(function () {
    Route::controller(UserController::class)->group(function () {
       //Route::post('/login', 'post_credential');

       Route::get('/user', 'get_user');

    });
});
Route::middleware(['auth:api'])->group(function () {
    Route::controller(ServiceController::class)->group(function () {
       Route::get('/get_services', 'services');
       Route::get('/get_service_detail/{id}', 'service_detail');
    });
});
Route::middleware(['auth:api'])->group(function () {
    Route::controller(ServiceOrderController::class)->group(function () {
       Route::post('/create_order', 'order_service');
       Route::get('/get_services', 'services');
       Route::get('/get_order_detail/{id}', 'order_detail');
       Route::get('/get_your_order', 'get_my_orders');

    }); 
});
Route::middleware(['auth:api'])->group(function () {
    Route::controller(SellingOrderController::class)->group(function () {
       Route::post('/sell_sm', 'store');

    }); 
});
Route::middleware(['auth:api'])->group(function () {
    Route::controller(PaymentAgentController::class)->group(function () {
       Route::post('/pay', 'store');
       Route::post('/deposit_balance', 'deposit');
       Route::get('/get_balance/{id}', 'show_balance');
    }); 
});