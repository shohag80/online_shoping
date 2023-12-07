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
        View::share([
            'user',User::all(),
            'product',Product::all(),
            'category',Category::all(),
            'brand',Brand::all(),
            'admin',Admin::all(),
            'order',Order::all(),
            'order_details',Order_Details::all(),
        ]);
    }
}
