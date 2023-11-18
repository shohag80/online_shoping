@extends('Frontend.Master')

<!-- Slider -->
@section('slider')

<section class="mt-8">
    <div class="container">
        <div class="hero-slider ">
            <div style="background: url(https://img.freepik.com/premium-photo/pile-fruits-vegetables-white-background_888757-831.jpg) no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                    <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

                    <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery </h2>
                    <p class="lead">Introduced a new model for online grocery shopping
                        and convenient home delivery.</p>
                    <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
                </div>

            </div>
            <div class="text-end" style="background: url(https://img.freepik.com/premium-photo/healthy-food-fruits-vegetables-falling-out-paper-bag-banner-generative-ai_446633-7161.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699142400&semt=ais) no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-11 py-14 px-8 text-xs-end">
                    <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                    <h2 class="text-dark display-5 fw-bold mt-4">Free Shipping on <br> orders over <span class="text-primary">$100</span></h2>
                    <p class="lead">Free Shipping to First-Time Customers Only, After promotions and<br>discounts are applied.
                    </p>
                    <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection

@section('product')

@include('Frontend.Pages.Product.list')

@endsection


@section('category')

@include('Frontend.Partials.Category')

@endsection


