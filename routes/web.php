<?php

use App\Http\Controllers\HomePage;
use App\Http\Controllers\ProductsPage;
use App\Http\Controllers\SalesPage;
use App\Http\Controllers\UserPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [HomePage::class, 'hello']);

Route::get('/products', [ProductsPage::class, 'products']);

Route::get('/category/food-beverage', [ProductsPage::class, 'food_beverage']);

Route::get('/category/beauty-health', [ProductsPage::class, 'beauty_health']);

Route::get('/category/home-care', [ProductsPage::class, 'home_care']);

Route::get('/category/baby-kid', [ProductsPage::class, 'baby_kid']);

Route::get('/user/{id?}/name/{name?}', [UserPage::class, 'user']);

Route::get('/sales', [SalesPage::class, 'sales']);
