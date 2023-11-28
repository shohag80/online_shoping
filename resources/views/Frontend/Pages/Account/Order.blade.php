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
                    <th>Product</th>
                    <th>Order</th>
                    <th>Date</th>
                    <th>Items</th>
                    <th>Status</th>
                    <th>Amount</th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- Table body -->
                @foreach($order as $item)
                <tr>
                    <td class="align-middle border-top-0">
                        <a href="#" class="fw-semibold text-inherit">
                            <h6 class="mb-0">{{$item->product_id}}</h6>
                        </a>
                        <span><small class="text-muted">400g</small></span>
                    </td>
                    <td class="align-middle border-top-0">
                        <a href="#" class="text-inherit">{{$item->id}}</a>
                    </td>
                    <td class="align-middle border-top-0">{{$item->created_at}}</td>
                    <td class="align-middle border-top-0">1</td>
                    <td class="align-middle border-top-0">
                        <span class="badge bg-primary">{{$item->status}}</span>
                    </td>
                    <td class="align-middle border-top-0">$15.00</td>
                    <td class="text-muted align-middle border-top-0">
                        @if($item->status=='pending')
                        <a href="{{route('Cancel_Product',$item->id)}}" class="btn btn-sm btn-danger">Cancel</a>
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