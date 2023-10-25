<?php

use App\Http\Controllers\BackendControllers\BrandsController as BackendControllersBrandsController;
use App\Http\Controllers\BackendControllers\CategoriesController as BackendControllersCategoriesController;
use App\Http\Controllers\BackendControllers\HomeController as BackendControllersHomeController;
use App\Http\Controllers\BackendControllers\MasterProController;
use App\Http\Controllers\BackendControllers\ProductsController as BackendControllersProductsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendControllers\BrandsController;
use App\Http\Controllers\FrontendControllers\CategoriesController;
use App\Http\Controllers\FrontendControllers\HomeController;
use App\Http\Controllers\FrontendControllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// FrontendRoutes
// Route::get('/',[HomeController::class,'home']);
// Route::get('/Category',[CategoriesController::class,'categoryList'])->name('FrontendCategory');
// Route::get('/Brands',[BrandsController::class,'brandsList']);
// Route::get('/Products',[ProductsController::class,'products']);


//BackendRoutes
Route::get('/',[BackendControllersHomeController::class,'home']);

Route::get('/Brands',[BackendControllersBrandsController::class,'brands']);
Route::get('/Brands/BrandList',[BackendControllersBrandsController::class,'add_brand'])->name('Add_Brand');
Route::post('/Brands/BrandList',[BackendControllersBrandsController::class,'brand_store'])->name('Brand_Store');


Route::get('/Products',[BackendControllersProductsController::class,'products']);

Route::get('/Category',[BackendControllersCategoriesController::class,'category']);
Route::get('/Category/form',[BackendControllersCategoriesController::class,'add_category']);
Route::post('/category/form/store',[BackendControllersCategoriesController::class,'store']);



Route::get('/MasterPro',[MasterProController::class,'viewPro']);
