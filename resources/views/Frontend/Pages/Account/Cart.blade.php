@extends('Frontend.Partials.Account')

@section('content')

<div class="container row p-4">
    <div class="col-md-8 container-fluid">
        <div class="offcanvas-header border-bottom">
            <div class="text-start">
                <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
                <small>Location in Dhaka.</small>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="container">
                <!-- alert -->
                @if(session()->has('virtual_cart'))
                <div class="alert alert-primary p-2 mt-3" role="alert">
                    <div class="row">
                        <div class="col-8">
                            You have
                            @if(session()->has('virtual_cart'))
                            {{ count(session()->get('virtual_cart')) }}
                            @endif
                            items in your cart.
                        </div>
                        <div class="col-4">
                            <a href="{{route('Cart_remove')}}" class="col-12 btn btn-sm btn-outline-primary rounded-3">Fresh Cart</a>
                        </div>
                    </div>
                </div>
                @else
                <div style="margin-top: 100px" class="p-5 text-center" role="alert">
                    You have 0 items in your cart. <a href="{{route('All_Products')}}">Continue Shopping.</a>
                </div>
                @endif

                <ul class="list-group list-group-flush">
                    <!-- list group -->
                    @if(session()->has('virtual_cart'))
                    @foreach(session()->get('virtual_cart') as $item)
                    <li class="list-group-item py-3 ps-0 border-top">
                        <!-- row -->
                        <div class="row align-items-center">

                            <div class="col-5 col-md-5 col-lg-5">
                                <div class="d-flex">
                                    <a href="{{route('Add_to_Cart',$item['id'])}}"><img src="{{url('uploads/',$item['photo'])}}" alt="Ecommerce" class="icon-shape icon-xxl"></a>
                                    <div class="ms-3">
                                        <!-- title -->
                                        <a href="./pages/shop-single.html" class="text-inherit">
                                            <h6 class="mb-0">{{$item['name']}}</h6>
                                        </a>
                                        <span><small class="text-muted">.98 / lb</small></span>
                                        <!-- text -->
                                        <div class="mt-2 small lh-1">
                                            <a href="{{route('Remove_Cart_Single_Product',$item['id'])}}" class="text-decoration-none text-inherit">
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


                            <div class="col-3">
                                <!-- input -->
                                <div class="input-group input-spinner">
                                    <a href="{{route('Cart_Item_Quantity_Decrease',$item['id'])}}" type="button" class="p-1 border"><i class="bi bi-arrow-down-square-fill"></i></a>
                                    <input type="number" step="1" max="10" value="{{$item['quantity']}}" name="quantity" class="quantity-field form-control-sm form-input">
                                    <a href="{{route('Add_to_Cart',$item['id'])}}" class="p-1 border"><i class="bi bi-arrow-up-square-fill"></i></a>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- input -->
                                <div class="input-group input-spinner">
                                    ৳ {{$item['price']}}
                                </div>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end">
                                <span class="fw-bold">৳ {{$item['subtotal']}}</span>

                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endif
                </ul>
                <!-- btn -->
                @if(session()->has('virtual_cart'))
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{route('All_Products')}}" class="btn btn-sm btn-primary">Continue Shopping</a>
                    <a href="#!" class="btn btn-sm btn-dark">Update Cart</a>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div style="width: 100%;">
            <!-- card -->
            <div class="card">
                <div class="card-body">
                    <!-- heading -->
                    <h2 class="h5 mb-4">Summary</h2>
                    <div class="card mb-2">
                        <!-- list group -->
                        <ul class="list-group list-group-flush">
                            <!-- list group item -->
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div>Item Subtotal</div>
                                </div>
                                @if(session()->get('virtual_cart'))
                                <span>৳ {{$subtotal=array_sum(array_column(session()->get('virtual_cart'),'subtotal'))}}</span>
                                @endif
                            </li>

                            <!-- list group item -->
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div>Service Fee</div>
                                </div>
                                <span>৳ 70</span>
                            </li>
                            <!-- list group item -->
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div class="fw-bold">Subtotal</div>
                                </div>
                                @if(session()->get('virtual_cart'))
                                <span class="fw-bold">৳ {{$subtotal+70}}</span>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="d-grid mb-1 mt-4">
                        <!-- btn -->
                        <a href="" class="btn btn-primary btn-lg text-center" type="submit">
                        Checkout
                        </a>
                    </div>
                    <!-- text -->
                    <p>
                        <small>
                            By placing your order, you agree to be bound by the Online Shop
                            <a href="#!">Terms of Service</a>
                            and
                            <a href="#!">Privacy Policy.</a>
                        </small>
                    </p>

                    <!-- heading -->
                    <div class="mt-8">
                        <h2 class="h5 mb-3">Add Promo or Gift Card</h2>
                        <form>
                            <div class="mb-2">
                                <!-- input -->
                                <label for="giftcard" class="form-label sr-only">Email address</label>
                                <input type="text" class="form-control" id="giftcard" placeholder="Promo or Gift Card">
                            </div>
                            <!-- btn -->
                            <div class="d-grid"><button type="submit" class="btn btn-outline-dark mb-1">Redeem</button></div>
                            <p class="text-muted mb-0"><small>Terms &amp; Conditions apply</small></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection