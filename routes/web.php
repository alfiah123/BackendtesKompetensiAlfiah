<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerProduct;
use App\Http\Controllers\controllerUser;
use App\Http\Controllers\controllerOrder;

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

Route::get('/', [controllerProduct::class, 'index']);
Route::get('/add-product', [controllerProduct::class, 'create']);
Route::post('/store-product', [controllerProduct::class, 'store']);
Route::get('/edit-product/{id}', [controllerProduct::class, 'edit']);
Route::post('/update-product/{id}', [controllerProduct::class, 'update']);
Route::delete('/delete-product/{id}', [controllerProduct::class, 'destroy']);

// Route::get('/order',function () {
//     return view('order');
// });


Route::get('/order', [controllerOrder::class, 'index']);
Route::get('/add-order', [controllerOrder::class, 'create']);
Route::post('/store-order', [controllerOrder::class, 'store']);
Route::get('/edit-order/{id}', [controllerOrder::class, 'edit']);
Route::post('/update-order/{id}', [controllerOrder::class, 'update']);
Route::delete('/delete-order/{id}', [controllerOrder::class, 'destroy']);

Route::get('/user', [controllerUser::class, 'index']);
Route::get('/add-user', [controllerUser::class, 'create']);
Route::post('/store-user', [controllerUser::class, 'store']);
Route::get('/edit-user/{id}', [controllerUser::class, 'edit']);
Route::post('/update-user/{id}', [controllerUser::class, 'update']);
Route::delete('/delete-user/{id}', [controllerUser::class, 'destroy']);


Route::get('/cart',function () {
    return view('cart');
});
