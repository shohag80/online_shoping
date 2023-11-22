@extends('Backend.Master')

@section('Container')

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <!-- Product section-->
            <section class="py-5">
                <div class="container border rounded p-3 px-4 px-lg-5 my-5">
                    <div class="row gx-4 gx-lg-5 align-items-center">
                        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" height="350" width="350" src="{{url('/uploads/'.$product_view->photo)}}" alt="product_view" /></div>
                        <div class="col-md-6 border">
                            <div class="small mb-1">{{$product_view->brand->brand_name}}</div>
                            <h1 class="display-5 fw-bolder">{{$product_view->product_name}}</h1>
                            <div class="fs-5 mb-5">
                                <!-- <span class="text-decoration-line-through">$45.00</span> -->
                                <span>BDT-{{$product_view->price}}/-</span>
                            </div>
                            <p class="lead">{{$product_view->discription}}</p>
                            <div class="d-flex">
                                <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                                <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                    <i class="bi-cart-fill me-1"></i>
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection