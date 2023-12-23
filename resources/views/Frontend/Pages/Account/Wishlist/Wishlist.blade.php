@extends('Frontend.Partials.Account')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="mb-8">
                <!-- heading -->
                <h3 class="mb-1 mt-4">My Wishlist</h3>
                <p>There are {{count($wishlist)}} products in this wishlist.</p>
            </div>
            <div>
                <!-- table -->
                <div class="table-responsive">
                    <table class="table text-nowrap table-with-checkbox">
                        <thead class="table-light">
                            <tr>
                                <th>
                                    <!-- form check -->
                                    <div class="form-check">
                                        <!-- input -->
                                        <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                        <!-- label -->
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th>Photo</th>
                                <th>Product</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($wishlist as $item)
                            <tr>
                                <td class="align-middle">
                                    <!-- form check -->
                                    <div class="form-check">
                                        <!-- input -->
                                        <input class="form-check-input" type="checkbox" value="" id="chechboxTwo">
                                        <!-- label -->
                                        <label class="form-check-label" for="chechboxTwo"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a href="#"><img src="{{url('/uploads/',$item->product->photo)}}" class="icon-shape icon-xxl" alt="photo"></a>
                                </td>
                                <td class="align-middle">
                                    <div>
                                        <h5 class="fs-6 mb-0"><a href="#" class="text-inherit">{{$item->product->name}}</a></h5>
                                        <small>$.98 / lb</small>
                                    </div>
                                </td>
                                <td class="align-middle">{{$item->product->price}}</td>
                                <td class="align-middle"><span class="badge bg-success">In Stock</span></td>
                                <td class="align-middle">
                                    <a class="btn btn-primary btn-sm">Add to Cart</a>
                                </td>
                                <td class="align-middle">
                                    <a href="{{route('Remove_Wishlist',$item->id)}}" class="text-muted" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                        <span class="me-1 align-text-bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-success">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg> Remove
                                        </span>
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection