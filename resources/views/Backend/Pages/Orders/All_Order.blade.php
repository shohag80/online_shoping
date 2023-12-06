@extends('Backend.Master')

@section('Container')

<div class="container bg-body-secondary p-3 mt-2">
    <div class="row">

        <div class="col-md-3 text-center bg-warning rounded-right">
            <h4>All Orders</h4>
        </div>
        <div class="text-end col-md-6 col-sm-8">
            <a href="" class="btn btn-outline-success">Order Filter</a> |
            <a href="" class="btn btn-outline-info">Export</a>
        </div>
        <div class="col-md-3">
            <form class="form-inline">
                <input class="form-control col-8 mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-info" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<section class="section-padding mb-2">
    <div class="container bg-body-tertiary p-2">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Customer ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->user_id}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->total_price}}</td>
                    <td>
                        @if($item->status=='pending')<a href="{{route('Order_Comfirm',$item->id)}}" class="badge bg-danger">{{$item->status}}</a>@endif
                        @if($item->status=='confirm')<span class="badge bg-success">{{$item->status}}</span>@endif
                        @if($item->status=='cancel')<span class="badge bg-danger">{{$item->status}}</span>@endif
                    </td>
                    <td><a href="" class="text-dark btn-sm rounded-5">{{$item->payment_method}}</a></td>
                    <td>
                        <a href="" class="btn badge btn-success btn-sm">View</a>
                        <a href="" class="btn badge btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection