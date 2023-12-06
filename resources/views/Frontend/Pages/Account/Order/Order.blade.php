@auth
@extends('Frontend.Partials.Account')

@section('content')
<div class="p-md-1 p-lg-4">
    <!-- heading -->
    <h2 class="mb-6">Your Orders</h2>

    <div class="table-responsive-xxl border-0">
        <!-- Table -->
        <table class="table mb-0 table-centered">
            <!-- Table Head -->
            <thead class="bg-light">
                <tr>
                    <th class="align-middle">Order ID</th>
                    <th class="align-middle">Date</th>
                    <th class="align-middle">Status</th>
                    <th class="align-middle">Amount</th>
                    <th class="align-middle">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table body -->
                @foreach($order as $item)
                <tr>
                    <td class="align-middle border-top-0">
                        <a href="#" class="text-inherit">{{$item->id}}</a>
                    </td>
                    <td class="align-middle border-top-0">{{$item->created_at}}</td>
                    <td class="align-middle border-top-0">
                        @if($item->status=='pending')<span class="badge bg-danger">{{$item->status}}</span>@endif
                        @if($item->status=='confirm')<span class="badge bg-success">{{$item->status}}</span>@endif
                        @if($item->status=='cancel')<span class="badge bg-danger">{{$item->status}}</span>@endif
                    </td>
                    <td class="align-middle border-top-0">{{$item->total_price}}</td>
                    <td class="align-middle border-top-0">
                        <a href="{{route('Order_Details',$item->id)}}" class="btn btn-sm badge btn-primary">Details</a>
                        @if($item->status=='pending')<a href="{{route('Order_Cancel',$item->id)}}" class="btn btn-sm badge btn-danger">Cancel</a>@endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@endauth

@guest
@section('login')
@include('Frontend.Partials.Login')
@endsection
@endguest