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
                $user=User::all();
                view::share('user',$user);
            }
            if(Schema::hasTable('products')){
                $products=Product::all();
                view::share('product',$products);
            }
            if(Schema::hasTable('categories')){
                $categories=Category::all();
                view::share('category',$categories);
            }
            if(Schema::hasTable('orders')){
                $orders=Order::all();
                view::share('order',$orders);
            }
            if(Schema::hasTable('order__details')){
                $order_details_all=Order_Details::all();
                view::share('order_details',$order_details_all);
            }
        }
    }
}
