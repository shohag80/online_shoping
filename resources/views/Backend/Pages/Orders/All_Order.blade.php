@extends('Backend.Master')

@section('Container')

<div class="container bg-body-secondary p-3 mt-2">
    <div class="row">

        <div class="col-md-3 text-center bg-warning rounded-right">
            <h4>All Orders</h4>
        </div>
        <div class="text-end col-md-6 col-sm-8">
            <a href="" class="btn btn-outline-success">Order Filter</a> |
            <a href="{{route('Admins_Mails')}}" class="btn btn-outline-info">Send Mail</a>
        </div>
        <div class="col-md-3">
            <form action="{{route('Order_Search')}}" method="get" class="form-inline">
                <input type="text" name="search" class="form-control col-8 mr-sm-1" placeholder="Search" aria-label="Search">
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
                    <th scope="col">Order ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Pay Method</th>
                    <th scope="col">Pay Status</th>
                    <th scope="col">Transaction Id</th>
                    <th scope="col">Delivery Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->amount}}/-</td>
                    <td><a href="" class="text-dark btn-sm rounded-5">{{$item->payment_method}}</a></td>
                    <td><a href="" class="text-dark btn-sm rounded-5">{{$item->payment_status}}</a></td>
                    <td>{{$item->transaction_id}}</td>
                    <td>
                        @if($item->delivery_status=='pending')<a href="{{route('Order_Comfirm',$item->id)}}" class="badge bg-danger">{{$item->delivery_status}}</a>@endif
                        @if($item->delivery_status=='confirm')<span class="badge bg-success">{{$item->delivery_status}}</span>@endif
                        @if($item->delivery_status=='cancel')<span class="badge bg-danger">{{$item->delivery_status}}</span>@endif
                    </td>
                    <td>
                        <a href="{{route('Admin_Order_Details',$item->id)}}" class="btn badge btn-success btn-sm">View</a>
                        <a href="{{route('Delete_Order',$item->id)}}" class="btn badge btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
{{$orders->links()}}
    </div>
</section>

@endsection