@extends('Frontend.Partials.Account')

@section('content')

<div class="container-fluid p-3">
    <div class="offcanvas-header border-bottom">
        <div class="text-start">
            <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
            <small>Location in 382480</small>
        </div>
    </div>
    <div class="offcanvas-body">
        <div class="container">
            <!-- alert -->
            <div class="alert alert-danger p-2 mt-3" role="alert">
                You’ve got FREE delivery. Start <a href="#!" class="alert-link">checkout now!</a>
            </div>
            <ul class="list-group list-group-flush">
                <!-- list group -->
                @if(session()->has('virtual_cart'))
                @foreach(session()->get('virtual_cart') as $item)
                <li class="list-group-item py-3 ps-0 border-top">
                    <!-- row -->
                    <div class="row align-items-center">

                        <div class="col-6 col-md-5 col-lg-7">
                            <div class="d-flex">
                                <img src="{{url('uploads/',$item['photo'])}}" alt="Ecommerce" class="icon-shape icon-xxl thumbnail zoom">
                                <div class="ms-3">
                                    <!-- title -->
                                    <a href="./pages/shop-single.html" class="text-inherit">
                                        <h6 class="mb-0">{{$item['name']}}</h6>
                                    </a>
                                    <span><small class="text-muted">.98 / lb</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small lh-1">
                                        <a href="#!" class="text-decoration-none text-inherit">
                                            <span class="me-1 align-text-bottom">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-success">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </span>
                                            <span class="text-muted">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- input group -->
                        <div class="row text-start col-4 col-md-4 col-lg-3">
                            <!-- input -->
                            <!-- input -->
                            <div class="col-1">
                                {{$item['quantity']}}
                            </div>
                            <div class="col-1">
                                *
                            </div>
                            <div class="col-2">
                                {{$item['price']}}
                            </div>
                           
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold">= {{$item['subtotal']}}.BDT</span>

                        </div>
                    </div>
                </li>
                @endforeach
                @endif
            </ul>
            <!-- btn -->
            <div class="d-flex justify-content-between mt-4">
                <a href="#!" class="btn btn-primary">Continue Shopping</a>
                <a href="#!" class="btn btn-dark">Update Cart</a>
            </div>
        </div>

    </div>
</div>

@endsection