@extends('Frontend.Master')


<!-- Products -->
@section('product')


<section>
    <div class="container col-md-12">
        <div class="row">
            <h3 class="col-md-12 m-3">Popular Products</h3>


            @foreach($products as $item)
            <div style="float: left;" class="col-md-3 mt-2">
                <div class="card card-product">
                    <div class="card-body">

                        <div class="text-center position-relative">
                            <div class=" position-absolute top-0 start-0">
                                <span class="badge bg-success">New</span>
                            </div>
                            <a href="{{route('Single_Products',$item->id)}}"> <img src="{{url('uploads/',$item->photo)}}" alt="image" class="mb-3 img-fluid"></a>
                            <div class="card-product-action">
                                <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                            </div>

                        </div>


                        <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Brand New</small></a>
                        </div>
                        <h2 class="fs-6"><a href="" class="text-inherit text-decoration-none">{{$item->product_name}}</a></h2>
                        <div>

                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5(149)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div><span class="text-dark">BDT- {{$item->price}}/-</span>
                                <!-- <span class="text-decoration-line-through text-muted">$24</span> -->
                            </div>
                            <div><a href="#!" class="btn btn-primary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg> Add to cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>    
    </div>    
</section>    



<!-- Single Product View -->



@endsection