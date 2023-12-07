@extends('Frontend.Master')

@section('category')

<!-- Category Section Start-->
<section class="mb-lg-10 mt-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">

                <h3 class="mb-0">Featured Categories</h3>

            </div>
        </div>
        <div class="category-slider">
        @foreach($category as $item)
            <div class="item">
                <a href="#" class="text-decoration-none text-inherit">
                    <div class="card card-product mb-lg-4">
                        <div class="card-body text-center py-4">
                            <img height="130" width="230" src="{{url('uploads/',$item->photo)}}" alt="Grocery Ecommerce Template">
                            <h5 class="text-truncate mt-4">{{$item->name}}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</section>

<!-- Category Section End-->


@endsection