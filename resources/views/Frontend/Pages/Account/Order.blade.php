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
                                    <th>Photo</th>
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
                                <tr>
                                    <td class="align-middle border-top-0 w-0">
                                        <a href="#"><img src="../assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="fw-semibold text-inherit">
                                            <h6 class="mb-0">Haldiram's Nagpur Aloo Bhujia</h6>
                                        </a>
                                        <span><small class="text-muted">400g</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="text-inherit">#14899</a>
                                    </td>
                                    <td class="align-middle border-top-0">March 5, 2023</td>
                                    <td class="align-middle border-top-0">1</td>
                                    <td class="align-middle border-top-0">
                                        <span class="badge bg-warning">Processing</span>
                                    </td>
                                    <td class="align-middle border-top-0">$15.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                        <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-top-0 w-0">
                                        <a href="#"><img src="../assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="fw-semibold text-inherit">
                                            <h6 class="mb-0">Nutri Choise Biscuit</h6>
                                        </a>
                                        <span><small class="text-muted">2 Pkt</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="text-inherit">#14658</a>
                                    </td>
                                    <td class="align-middle border-top-0">July 9, 2023</td>
                                    <td class="align-middle border-top-0">2</td>
                                    <td class="align-middle border-top-0">
                                        <span class="badge bg-success">Completed</span>
                                    </td>
                                    <td class="align-middle border-top-0">$45.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                        <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-top-0 w-0">
                                        <a href="#"><img src="../assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="text-inherit">
                                            <h6 class="mb-0">Cadbury Dairy Milk 5 Star Bites</h6>
                                            <span><small class="text-muted">202 g</small></span>
                                        </a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="text-inherit">#13778</a>
                                    </td>
                                    <td class="align-middle border-top-0">Oct 03, 2023</td>
                                    <td class="align-middle border-top-0">4</td>
                                    <td class="align-middle border-top-0">
                                        <span class="badge bg-success">Completed</span>
                                    </td>
                                    <td class="align-middle border-top-0">$99.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                        <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-top-0 w-0">
                                        <a href="#"><img src="../assets/images/products/product-img-4.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="fw-semibold text-inherit">
                                            <h6 class="mb-0">Onion Flavour Potato</h6>
                                        </a>
                                        <span><small class="text-muted">100 g</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="text-inherit">#13746</a>
                                    </td>
                                    <td class="align-middle border-top-0">March 5, 2023</td>
                                    <td class="align-middle border-top-0">1</td>
                                    <td class="align-middle border-top-0">
                                        <span class="badge bg-success">Completed</span>
                                    </td>
                                    <td class="align-middle border-top-0">$12.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                        <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-top-0 w-0">
                                        <a href="#"><img src="../assets/images/products/product-img-5.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="fw-semibold text-inherit">
                                            <h6 class="mb-0">Salted Instant Popcorn</h6>
                                        </a>
                                        <span><small class="text-muted">500 g</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="text-inherit">#13566</a>
                                    </td>
                                    <td class="align-middle border-top-0">July 9, 2023</td>
                                    <td class="align-middle border-top-0">2</td>
                                    <td class="align-middle border-top-0">
                                        <span class="badge bg-danger">Cancel</span>
                                    </td>
                                    <td class="align-middle border-top-0">$6.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                        <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-top-0 w-0">
                                        <a href="#"><img src="../assets/images/products/product-img-6.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="fw-semibold text-inherit">
                                            <h6 class="mb-0">Blueberry Greek Yogurt</h6>
                                        </a>
                                        <span><small class="text-muted">500 g</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="text-inherit">#12094</a>
                                    </td>
                                    <td class="align-middle border-top-0">Oct 03, 2023</td>
                                    <td class="align-middle border-top-0">4</td>
                                    <td class="align-middle border-top-0">
                                        <span class="badge bg-success">Completed</span>
                                    </td>
                                    <td class="align-middle border-top-0">$18.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                        <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                </tr>
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