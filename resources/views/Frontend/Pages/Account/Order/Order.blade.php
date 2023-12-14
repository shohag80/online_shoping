@auth
@extends('Frontend.Partials.Account')

@section('content')
<div class="p-md-1 p-lg-4">
    <!-- heading -->
    <div class="d-flex justify-content-between m-4">
        <h2 class="">Your Orders</h2>
        <a href="{{route('All_Products')}}" class="btn btn-primary">Continue Shopping <i class="bi bi-cart"></i></a>
    </div>

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
                        @if($item->status=='cancel')<span class="badge bg-secondary">{{$item->status}}</span>@endif
                    </td>
                    <td class="align-middle border-top-0">৳ {{$item->amount}}/-</td>
                    <td class="align-middle border-top-0">
                        @if($item->status=='pending')
                        <a href="{{route('Order_Details',$item->id)}}" class="btn btn-sm badge btn-primary">Details</a>
                        <a href="{{route('Order_Cancel',$item->id)}}" class="btn btn-sm badge btn-danger">Cancel</a>
                        @elseif($item->status=='confirm')
                        <a href="{{route('Order_Details',$item->id)}}" class="btn btn-sm badge btn-primary">Details</a>
                        @endif

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