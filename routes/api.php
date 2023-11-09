<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\FrontendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//auth
Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::post('logout',[AuthController::class,'logout']);
Route::post('changePassword',[AuthController::class,'changePassword']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//main
Route::get('company',[FrontendController::class,'company']);
Route::get('banner',[FrontendController::class,'banner']);
//shop
Route::get('brand',[FrontendController::class,'brand']);
Route::get('color',[FrontendController::class,'color']);
Route::get('size',[FrontendController::class,'size']);
Route::get('products',[FrontendController::class,'getProducts']);
Route::get('product/{id}',[FrontendController::class,'getProduct']);
Route::get('categories',[FrontendController::class,'getCategories']);
Route::get('category/{id}',[FrontendController::class,'getCategory']);
//customer
Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::post('cart',[FrontendController::class,'addToCart']);
    Route::get('cart',[FrontendController::class,'getToCart']);
    Route::post('order',[FrontendController::class,'order']);
});
//general setting
Route::get('/user',[AuthController::class,'user']);
