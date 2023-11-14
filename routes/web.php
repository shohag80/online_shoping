<?php


use App\Http\Controllers\BackendControllers\AdminControllers;
use App\Http\Controllers\BackendControllers\BrandsController as BackendControllersBrandsController;
use App\Http\Controllers\BackendControllers\CategoriesController as BackendControllersCategoriesController;
use App\Http\Controllers\BackendControllers\ContactController;
use App\Http\Controllers\BackendControllers\CustomerController;
use App\Http\Controllers\BackendControllers\DeliveryController;
use App\Http\Controllers\BackendControllers\HomeController as BackendControllersHomeController;
use App\Http\Controllers\BackendControllers\LoginController as BackendControllersLoginController;
use App\Http\Controllers\BackendControllers\MasterHomeControllers;
use App\Http\Controllers\BackendControllers\MasterProController;
use App\Http\Controllers\BackendControllers\OrderController;
use App\Http\Controllers\BackendControllers\ProductsController as BackendControllersProductsController;
use App\Http\Controllers\BackendControllers\SuppliersController;
use App\Http\Controllers\FrontendControllers\HomeController;
use App\Http\Controllers\FrontendControllers\ProductsController;
use App\Http\Controllers\FrontendControllers\UserController;
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

Route::group(['prefix'=>'user'],function(){

Route::get('/signup',[UserController::class,'signup'])->name('SignUp');
Route::post('/do_signup',[UserController::class,'do_signup'])->name('Do_SignUp');


Route::get('/signin',[UserController::class,'login'])->name('SignIn');
Route::get('/forgetpassword',[UserController::class,'forget_password'])->name('Forget_Password');

Route::get('/',[HomeController::class,'userHome'])->name('User_Home');
Route::get('/products',[ProductsController::class,'products'])->name('All_Products');



});






//BackendRoutes

Route::group(['prefix'=>'admin'],function(){

Route::get('login',[BackendControllersLoginController::class,'login'])->name('Login');
Route::post('login/dologin',[BackendControllersLoginController::class,'loginForm'])->name('Do_Login');

Route::group(['middleware'=>'auth'], function(){

Route::get('/user_list',[AdminControllers::class,'admin'])->name('Admin');
Route::get('/user/form',[AdminControllers::class,'form'])->name('Admin_Form');
Route::post('/user/form/store',[AdminControllers::class,'store'])->name('Admin_Store');

Route::get('/',[BackendControllersHomeController::class,'home'])->name('Home_Page');

Route::get('/category',[BackendControllersCategoriesController::class,'category'])->name('Category');
Route::get('/category/form',[BackendControllersCategoriesController::class,'add_category'])->name('Add_Category');
Route::post('/category/form/store',[BackendControllersCategoriesController::class,'store'])->name('Category_Store');

Route::get('/brands',[BackendControllersBrandsController::class,'brands'])->name('Brand');
Route::get('/brands/from',[BackendControllersBrandsController::class,'add_brand'])->name('Add_Brand');
Route::post('/brands/from/store',[BackendControllersBrandsController::class,'brand_store'])->name('Brand_Store');

Route::get('/products',[BackendControllersProductsController::class,'products'])->name('Products');
Route::get('/Product/form',[BackendControllersProductsController::class,'form'])->name('Product_From');
Route::post('/product/store',[BackendControllersProductsController::class,'form_data_store'])->name('Product_Store');

Route::get('/logout',[BackendControllersLoginController::class,'logout'])->name('Logout');
});

});





Route::get('/MasterPro',[MasterProController::class,'viewPro'])->name('master_pro');

Route::get('/home',[MasterHomeControllers::class, 'main'])->name('Home');
Route::get('/profile/admins',[AdminControllers::class, 'master_admin'])->name('Admins');
Route::get('/profile/suppliers',[SuppliersController::class, 'master_supplier'])->name('Supplier');
Route::get('/profile/customers',[CustomerController::class, 'customer'])->name('Customers');
Route::get('/profile/delivery_mans',[DeliveryController::class, 'delivery_mans'])->name('delivery');

Route::get('/category/add',[BackendControllersCategoriesController::class,'add_category_pro'])->name('add_category_pro');
Route::get('/category/list',[BackendControllersCategoriesController::class,'category_list_pro'])->name('category_list_pro');

Route::get('/brand/add',[BackendControllersBrandsController::class,'add_brand_pro'])->name('Add_Brand_Pro');
Route::get('/brand/all_brands',[BackendControllersBrandsController::class,'all_brands_pro'])->name('All_Brands_Pro');

Route::get('/product/add',[BackendControllersProductsController::class,'add_product_pro'])->name('add_product_pro');
Route::get('/product/list',[BackendControllersProductsController::class,'product_list_pro'])->name('product_list_pro');
Route::get('/product/reviews',[BackendControllersProductsController::class,'product_reviews'])->name('product_reviews');

Route::get('/order/recent',[OrderController::class,'recent_order'])->name('Recent');
Route::get('/order/last_month',[OrderController::class,'last_month'])->name('Last_Month');
Route::get('/order/all_orders',[OrderController::class,'all_orders'])->name('All_Orders');

Route::get('/delivery/panding', [DeliveryController::class,'panding'])->name('Delivery_Panding');
Route::get('/delivery/processing', [DeliveryController::class,'processing'])->name('Delivery_Processing');
Route::get('/delivery/complete', [DeliveryController::class,'complete'])->name('Delivery_Complete');

Route::get('/contact/head_office',[ContactController::class,'head_office'])->name('Head_Office');
Route::get('/contact/customer_care',[ContactController::class,'customer_care'])->name('Customer_Care');
Route::get('/contact/supplier_shops',[ContactController::class,'supplier_shops'])->name('Supplier_Shops');
