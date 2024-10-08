<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

use App\Http\Controllers\CartItemsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProductImagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsRevenueController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WishlistsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/auth')->group(function(){
    Route::get('/CreactUser', action: [Controllerf::class, "register"]);
    Route::get('/CreactUser', function(){
        return 'hi';
    });
    // Route::post('/CreactUser', function(){
    //     return 'hi';
    // });
});


Route::prefix('products')->group(function(){
    Route::get('', [userController::class, 'index']);
    Route::get('/{id}', [userController::class, 'show']);
    Route::post('', [userController::class, 'store']);
    Route::put('/{id}', [userController::class, 'update']);
    Route::delete('/{id}', [userController::class, 'destroy']);
});