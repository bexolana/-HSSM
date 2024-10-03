<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Landing\AdminController;
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\PaymentAgentController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\SellingOrderController;
use App\Http\Controllers\ServiceOrderController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\SocialMediaServiceController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('Landing.index');
});
    Route::get('/login', [UserController::class, 'login']);
    Route::post('/login', [UserController::class, 'web_login'])->name('login');
Route::middleware(['web'])->group(function () {
    Route::controller(ServiceOrderController::class)->group(function () {
        Route::get('/hssm_orders', 'get_orders');
        Route::post('/approve_the_order/{id}', 'admin_approve');
        Route::get('/reject_order/{id}', 'admin_reject');
     });
});
Route::middleware(['auth:web'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/logout', 'logout');
     });
});
Route::middleware(['auth:web'])->group(function () {
    Route::controller(TransactionController::class)->group(function () {
        // Get the transaction list
        Route::get('/NewTransaction', 'transaction_list');

        // Post request to approve a transaction (Use POST or PATCH for modifying data)
        Route::post('/approve_transaction/{id}', 'admin_approve');

        // Post request to reject a transaction (Use POST or DELETE for this action)
        Route::post('/reject_transaction/{id}', 'admin_reject');
    });
});

Route::middleware(['web'])->group(function () {
    Route::controller(SocialMediaController::class)->group(function () {
       Route::get('/sm_page', 'index');
       Route::post('/create_social_media', 'create_social_media');
       Route::post('/edit/{id}', 'update');
       Route::post('/delete/{id}', 'delete_sm');
    }); 
});
Route::middleware(['auth:web'])->group(function () {
    Route::controller(SocialMediaServiceController::class)->group(function () {
       Route::post('/create_sm_services', 'sm_service_create');
       Route::post('/update_service/{SocialMediaService}', 'update');
       Route::get('/delete_service/{SocialMediaService}', 'destroy');
    }); 
});
Route::middleware(['web'])->group(function () {
    Route::controller(SellingOrderController::class)->group(function () {
       Route::get('/get_sm_sell_request', 'index');
       Route::post('/approve_the_sell_order/{id}', 'admin_approve');
       Route::post('/request_sold/{id}', 'approve_sold');
       Route::post('/reject_sell_order/{id}', 'admin_reject');
    }); 
});
Route::middleware(['web'])->group(function () {
    Route::controller(PaymentAgentController::class)->group(function () {
       Route::get('/Payment', 'index');
       Route::post('/create_payment_method', 'payment_method_creation');
       Route::post('/editPayment/{id}', 'edit_payment');
       Route::post('/deletePayment/{id}', 'delete_payment');
    }); 
});
Route::middleware(['web'])->group(function () {
    Route::controller(PaymentAgentController::class)->group(function () {
       Route::get('/Payment', 'index');
       Route::post('/create_payment_method', 'payment_method_creation');
       Route::post('/editPayment/{id}', 'edit_payment');
       Route::post('/deletePayment/{id}', 'delete_payment');
    }); 
});
Route::middleware(['auth:web'])->group(function () {
    Route::controller(PaymentAgentController::class)->group(function () {
       Route::post('/make_payment', 'create_payment');
    }); 
});


Route::get('/roles', [RolePermissionController::class, 'index'])->name('roles.index');
Route::post('/roles', [RolePermissionController::class, 'createRole'])->name('roles.create');
Route::post('/permissions', [RolePermissionController::class, 'createPermission'])->name('permissions.create');
Route::controller(AdminController::class)->group(function () {

    Route::get('/dashboard', 'index');
    Route::get('/UserList', 'UserList');
    Route::get('/ManagerList', 'ManagerList');
    Route::get('/ManagerProfile', 'ManagerProfile');
    Route::get('/role', 'role');
    Route::get('/NewOrders', 'NewOrders')->name('users.index');
    Route::get('/OnprogressOrders', 'OnprogressOrders');
    Route::get('/SolvedOrders', 'SolvedOrders');
   // Route::get('/NewTransaction', 'NewTransaction');
    Route::get('/solvedTransaction', 'solvedTransaction');
    Route::get('/Catagory', 'Catagory');
    Route::get('/Service', 'Service');
    Route::get('/Sales', 'Sales');
    Route::get('/SalesSoldOut', 'SalesSoldOut');
    Route::get('/SalesCatagory', 'SalesCatagory');
   // Route::get('/Payment', 'Payment');
    Route::get('/SocialLinks', 'SocialLinks');
    Route::get('/Analytics', 'Analytics');
    Route::get('/TransactionReport', 'TransactionReport');

})->middleware('auth');



//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
