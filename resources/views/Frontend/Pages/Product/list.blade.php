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
                            <a href="{{route('Single_Product',$item->id)}}"> <img src="{{url('uploads/',$item->photo)}}" alt="image" class="mb-3 img-fluid"></a>
                            <div class="card-product-action">
                                <a href="" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                            </div>

                        </div>


                        <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>{{$item->brand->brand_name}}</small></a>
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

<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body p-8">
                  <div class="position-absolute top-0 end-0 me-3 mt-3">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <!-- img slide -->
                        <div class="product productModal" id="productModal">
                           <div class="zoom" onmousemove="zoom(event)" style="background-image: url(./assets/images/products/product-single-img-1.jpg)">
                              <!-- img -->
                              <img src="{{url('uploads/',$item->photo)}}" alt="" />
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(./assets/images/products/product-single-img-2.jpg)">
                                 <!-- img -->
                                 <img src="{{url('uploads/',$item->photo)}}" alt="" />
                              </div>
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(./assets/images/products/product-single-img-3.jpg)">
                                 <!-- img -->
                                 <img src="{{url('uploads/',$item->photo)}}" alt="" />
                              </div>
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(./assets/images/products/product-single-img-4.jpg)">
                                 <!-- img -->
                                 <img src="{{url('uploads/',$item->photo)}}" alt="" />
                              </div>
                           </div>
                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                           <div class="thumbnails row g-3" id="productModalThumbnails">
                              <div class="col-3" class="tns-nav-active">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="{{url('uploads/',$item->photo)}}" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="{{url('uploads/',$item->photo)}}" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="{{url('uploads/',$item->photo)}}" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="{{url('uploads/',$item->photo)}}" alt="" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="ps-lg-8 mt-6 mt-lg-0">
                           <a href="#!" class="mb-4 d-block">{{$item->id}}</a>
                           <h2 class="mb-1 h1">{{$item->product_name}}</h2>
                           <div class="mb-4">
                              <small class="text-warning">
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <a href="#" class="ms-2">(30 reviews)</a>
                           </div>
                           <div class="fs-4">
                              <span class="fw-bold text-dark">$32</span>
                              <span class="text-decoration-line-through text-muted">$35</span>
                              <span><small class="fs-6 ms-2 text-danger">26% Off</small></span>
                           </div>
                           <hr class="my-6" />
                           <div class="mb-4">
                              <button type="button" class="btn btn-outline-secondary">250g</button>
                              <button type="button" class="btn btn-outline-secondary">500g</button>
                              <button type="button" class="btn btn-outline-secondary">1kg</button>
                           </div>
                           <div>
                              <!-- input -->
                              <!-- input -->
                              <div class="input-group input-spinner">
                                 <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                                 <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                                 <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                              </div>
                           </div>
                           <div class="mt-3 row justify-content-start g-2 align-items-center">
                              <div class="col-lg-4 col-md-5 col-6 d-grid">
                                 <!-- button -->
                                 <!-- btn -->
                                 <button type="button" class="btn btn-primary">
                                    <i class="feather-icon icon-shopping-bag me-2"></i>
                                    Add to cart
                                 </button>
                              </div>
                              <div class="col-md-4 col-5">
                                 <!-- btn -->
                                 <a class="btn btn-light" href="#" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 <a class="btn btn-light" href="#!" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Wishlist"><i class="feather-icon icon-heart"></i></a>
                              </div>
                           </div>
                           <hr class="my-6" />
                           <div>
                              <table class="table table-borderless">
                                 <tbody>
                                    <tr>
                                       <td>Product Code:</td>
                                       <td>FBB00255</td>
                                    </tr>
                                    <tr>
                                       <td>Availability:</td>
                                       <td>In Stock</td>
                                    </tr>
                                    <tr>
                                       <td>Type:</td>
                                       <td>Fruits</td>
                                    </tr>
                                    <tr>
                                       <td>Shipping:</td>
                                       <td>
                                          <small>
                                             01 day shipping.
                                             <span class="text-muted">( Free pickup today)</span>
                                          </small>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>



@endsection