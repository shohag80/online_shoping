@extends('Backend.Master')

@section('Container')

<style>
    .track-line {
        height: 2px !important;
        background-color: #488978;
        opacity: 1;
    }

    .dot {
        height: 10px;
        width: 10px;
        margin-left: 3px;
        margin-right: 3px;
        margin-top: 0px;
        background-color: #488978;
        border-radius: 50%;
        display: inline-block
    }

    .big-dot {
        height: 25px;
        width: 25px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        background-color: #488978;
        border-radius: 50%;
        display: inline-block;
    }

    .big-dot i {
        font-size: 12px;
    }

    .card-stepper {
        z-index: 0
    }
</style>

<section class="h-100 h-custom" style="background-color: #ffff;">
    <div class="container mb-4 py-5 h-130">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-12">
                <div class="card border-top border-bottom border-4" style="border-color: green !important; background-color: #ffff;">
                    <div class="card-body p-5">
                        <div class="container bg-primary rounded-3 p-2 mt-3">

                            <h1 class="lead fw-bold m-3 text-center text-light display-5">Order Details</h1>

                        </div>
                        <div class="container p-4 mt-3">
                            <div class="row">
                                <div class="col">
                                    <p class="small text-muted mb-1">Date</p>
                                    <p>{{$order->created_at}}</p>
                                </div>
                                <div class="col">
                                    <p class="small text-muted mb-1">Payment Status</p>
                                    <p>{{$order->payment_method}}</p>
                                </div>
                                <div class="col">
                                    <p class="small text-muted mb-1">Order No.</p>
                                    <p>OS - {{$order->id}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="small text-muted mb-1">Name</p>
                                    <p>{{$order->name}}</p>
                                </div>
                                <div class="col">
                                    <p class="small text-muted mb-1">Phone Number</p>
                                    <p>{{$order->phone}}</p>
                                </div>
                                <div class="col">
                                    <p class="small text-muted mb-1">E-mail</p>
                                    <p>{{$order->email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="small text-muted mb-1">Address</p>
                                    <p>{{$order->address}}</p>
                                </div>
                                <div class="col">
                                    <p class="small text-muted mb-1">State</p>
                                    <p>Dhaka</p>
                                </div>
                                <div class="col">
                                    <p class="small text-muted mb-1">Country</p>
                                    <p>Bangladesh</p>
                                </div>

                            </div>

                        </div>


                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col">
                                    <div class="card card-stepper" style="border-radius: 10px;">
                                        <div class="card-body p-4">

                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-column">
                                                    <span class="lead fw-normal">Your order has been delivered</span>
                                                    <span class="text-muted small">by DHFL on 21 Jan, 2030</span>
                                                </div>
                                            </div>
                                            <hr class="my-4">

                                            <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                                                <span class="dot"></span>
                                                <hr class="flex-fill track-line"><span class="dot"></span>
                                                <hr class="flex-fill track-line"><span class="dot"></span>
                                                <hr class="flex-fill track-line"><span class="dot"></span>
                                                <hr class="flex-fill track-line"><span class="d-flex justify-content-center align-items-center big-dot dot">
                                                    <i class="fa fa-check text-white"></i></span>
                                            </div>

                                            <div class="d-flex flex-row justify-content-between align-items-center">
                                                <div class="d-flex flex-column align-items-start"><span>15 Mar</span><span>Order placed</span>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center"><span>15 Mar</span><span>Order
                                                        placed</span></div>
                                                <div class="d-flex flex-column justify-content-center align-items-center"><span>15
                                                        Mar</span><span>Order Dispatched</span></div>
                                                <div class="d-flex flex-column align-items-center"><span>15 Mar</span><span>Out for
                                                        delivery</span></div>
                                                <div class="d-flex flex-column align-items-end"><span>15 Mar</span><span>Delivered</span></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="p-4 rounded-2 border">
                            <table class="table table-hover rounded">
                                <thead class="bg-success">
                                    <tr class="text-center">
                                        <th scope="col">Image</th>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order_details as $key=>$item)
                                    <tr class="text-center">
                                        <td scope="row">{{$key+1}}</td>
                                        <td><img height="40" width="40" src="{{url('uploads/',$item->product->photo)}}" alt=""></td>
                                        <td>{{$item->product->name}}</td>
                                        <td>{{$item->quantity}} pcs</td>
                                        <td>{{$item->subtotal}}/-</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="container col-12">
                                <div class="row bg-primary p-2">
                                    <div class="col-8 text-light">
                                        Total Price
                                    </div>
                                    <div class="col-2 text-light">
                                        {{$order->total_quantity}}
                                    </div>
                                    <div class="col-2 text-center text-light">
                                        {{$order->total_price}}/-
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection