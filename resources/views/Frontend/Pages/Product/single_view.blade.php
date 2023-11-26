@extends('Frontend.Master')

@section('product')

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <!-- Product section-->
            <section class="py-5">
                <div class="container border rounded p-3 px-4 px-lg-5 my-5">
                    <div class="row gx-4 gx-lg-5 align-items-center">
                        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{url('/uploads/'.$single_product->photo)}}" alt="..." /></div>
                        <div class="col-md-6">
                            <div class="small mb-1">{{$single_product->brand->name}}</div>
                            <h1 class="display-5 fw-bolder">{{$single_product->name}}</h1>
                            <div class="fs-5 mb-5">
                                <!-- <span class="text-decoration-line-through">$45.00</span> -->
                                <span>BDT-{{$single_product->price}}/-</span>
                            </div>
                            <p class="lead">{{$single_product->discription}}</p>
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