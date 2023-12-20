<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Order_Details;
use App\Models\Product;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::usebootstrap();

        if(!app()->runningInConsole()){
            if(Schema::hasTable('users')){
                view::share('user',User::all());
            }
            // if(Schema::hasTable('products')){
            //     view::share('product',Product::all());
            // }
            if(Schema::hasTable('categories')){
                
                view::share('category',Category::all());
            }
            // if(Schema::hasTable('orders')){
            //     view::share('order',Order::all());
            // }
            // if(Schema::hasTable('order__details')){
            //     view::share('order_details',Order_Details::all());
            // } 
            if(Schema::hasTable('brands')){
                view::share('brand',Brand::all());
            } 
            if(Schema::hasTable('admin')){
                view::share('brand',Brand::all());
            } 
        }
    }
}
