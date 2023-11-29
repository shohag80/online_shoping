<?php


use App\Http\Controllers\BackendControllers\AdminControllers;
use App\Http\Controllers\BackendControllers\BrandsController as BackendControllersBrandsController;
use App\Http\Controllers\BackendControllers\CategoriesController as BackendControllersCategoriesController;
use App\Http\Controllers\BackendControllers\ContactController;
use App\Http\Controllers\BackendControllers\CustomerController;
use App\Http\Controllers\BackendControllers\DeliveryController;
use App\Http\Controllers\BackendControllers\LoginController as BackendControllersLoginController;
use App\Http\Controllers\BackendControllers\MasterHomeControllers;
use App\Http\Controllers\BackendControllers\MasterProController;
use App\Http\Controllers\BackendControllers\OrderController;
use App\Http\Controllers\BackendControllers\ProductsController as BackendControllersProductsController;
use App\Http\Controllers\BackendControllers\SuppliersController;
use App\Http\Controllers\FrontendControllers\AccountController;
use App\Http\Controllers\FrontendControllers\CategoriesController;
use App\Http\Controllers\FrontendControllers\DepartmentController;
use App\Http\Controllers\FrontendControllers\HomeController;
use App\Http\Controllers\FrontendControllers\OrderController as FrontendControllersOrderController;
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



Route::group(['middleware' => 'auth'], function () {
    Route::get('/signout', [UserController::class, 'logout'])->name('SignOut');
    Route::get('product/buy_now/{id}', [FrontendControllersOrderController::class, 'product_buy'])->name('Product_Buy');
    Route::get('product/cancel_order/{id}', [FrontendControllersOrderController::class, 'cancel_product'])->name('Cancel_Product');
});

Route::get('/signup', [UserController::class, 'signup'])->name('SignUp');
Route::post('/do_signup', [UserController::class, 'do_signup'])->name('Do_SignUp');

Route::get('/signin', [UserController::class, 'login'])->name('SignIn');
Route::post('/do_signin', [UserController::class, 'do_login'])->name('Do_SignIn');

Route::get('/forgetpassword', [UserController::class, 'forget_password'])->name('Forget_Password');

Route::get('/', [HomeController::class, 'userHome'])->name('User_Home');

Route::get('/catetories', [CategoriesController::class, 'categories'])->name('All_Category');

Route::get('/products', [ProductsController::class, 'products'])->name('All_Products');
Route::get('/product/add_to_cart/{id}', [FrontendControllersOrderController::class, 'add_to_cart'])->name('Add_to_Cart');
Route::get('/single_products/{id}', [ProductsController::class, 'product'])->name('Single_Product');

Route::group(['prefix' => 'account'], function () {
    Route::get('/product/cart', [FrontendControllersOrderController::class, 'cart'])->name('Cart');
    Route::get('/product/cart/remove', [FrontendControllersOrderController::class, 'cart_remove'])->name('Cart_remove');
    Route::get('/order', [AccountController::class, 'order'])->name('Order');
    Route::get('/settings', [AccountController::class, 'settings'])->name('Settings');
    Route::get('/address', [AccountController::class, 'address'])->name('Address');
    Route::get('/payment', [AccountController::class, 'payment'])->name('Payment');
    Route::get('/notification', [AccountController::class, 'notification'])->name('Notification');
});

Route::get('/department', [DepartmentController::class, 'dairy'])->name('Dairy');








//BackendRoutes

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [BackendControllersLoginController::class, 'login'])->name('Login');
    Route::post('login/dologin', [BackendControllersLoginController::class, 'loginForm'])->name('Do_Login');

    Route::group(['middleware' => 'AdminChecker'], function () {
        Route::get('/MasterPro', [MasterProController::class, 'viewPro'])->name('master_pro');

        Route::get('/', [MasterHomeControllers::class, 'main'])->name('Home');

        Route::get('/profile/admins', [AdminControllers::class, 'admin'])->name('Admins');
        Route::get('/profile/admin/delete/{id}', [AdminControllers::class, 'delete'])->name('Admin_Delete');
        Route::get('/profile/admin/update/{id}', [AdminControllers::class, 'update'])->name('Admin_Update');
        Route::put('/profile/admin/update/store/{id}', [AdminControllers::class, 'update_store'])->name('Admin_Update_Store');
        Route::get('/profile/admin/form', [AdminControllers::class, 'form'])->name('Admin_Form');
        Route::post('/profile/admin/store', [AdminControllers::class, 'store'])->name('Admin_store');

        Route::get('/profile/suppliers', [SuppliersController::class, 'master_supplier'])->name('Supplier');
        Route::get('/profile/customers', [CustomerController::class, 'list'])->name('Customers');
        Route::get('/profile/delivery_mans', [DeliveryController::class, 'delivery_mans'])->name('delivery');

        Route::get('/category/form', [BackendControllersCategoriesController::class, 'from'])->name('add_category');
        Route::get('/category/list', [BackendControllersCategoriesController::class, 'list'])->name('category_list');
        Route::get('/category/delete/{id}', [BackendControllersCategoriesController::class, 'delete'])->name('category_delete');
        Route::post('/category/store', [BackendControllersCategoriesController::class, 'store'])->name('category_Store');

        Route::get('/brand/form', [BackendControllersBrandsController::class, 'form'])->name('add_brand');
        Route::get('/brand/list', [BackendControllersBrandsController::class, 'list'])->name('brnad_list');
        Route::post('/brand/store', [BackendControllersBrandsController::class, 'store'])->name('brand_store');

        Route::get('/product/form', [BackendControllersProductsController::class, 'form'])->name('add_product');
        Route::get('/product/list', [BackendControllersProductsController::class, 'list'])->name('product_list');
        Route::post('/product/list', [BackendControllersProductsController::class, 'store'])->name('product_store');
        Route::get('/product/list/{id}', [BackendControllersProductsController::class, 'delete'])->name('product_delete');





        Route::get('/product/reviews', [BackendControllersProductsController::class, 'product_reviews'])->name('product_reviews');

        Route::get('/order/recent', [OrderController::class, 'recent_order'])->name('Recent');
        Route::get('/order/last_month', [OrderController::class, 'last_month'])->name('Last_Month');
        Route::get('/order/all_orders', [OrderController::class, 'all_orders'])->name('All_Orders');

        Route::get('/delivery/panding', [DeliveryController::class, 'panding'])->name('Delivery_Panding');
        Route::get('/delivery/processing', [DeliveryController::class, 'processing'])->name('Delivery_Processing');
        Route::get('/delivery/complete', [DeliveryController::class, 'complete'])->name('Delivery_Complete');

        Route::get('/contact/head_office', [ContactController::class, 'head_office'])->name('Head_Office');
        Route::get('/contact/customer_care', [ContactController::class, 'customer_care'])->name('Customer_Care');
        Route::get('/contact/supplier_shops', [ContactController::class, 'supplier_shops'])->name('Supplier_Shops');

        Route::get('/logout', [BackendControllersLoginController::class, 'logout'])->name('Logout');
    });
});
