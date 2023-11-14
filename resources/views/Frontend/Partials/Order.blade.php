         <!-- section -->
         <section>
            <div class="container">
               <!-- row -->
               <div class="row">
                  <!-- col -->
                  <div class="col-12">
                     <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                        <!-- heading -->
                        <h3 class="fs-5 mb-0">Account Setting</h3>
                        <!-- button -->
                        <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount" aria-controls="offcanvasAccount">
                           <i class="bi bi-text-indent-left fs-3"></i>
                        </button>
                     </div>
                  </div>
                  <!-- col -->
                  <div class="col-lg-3 col-md-3 col-12 border-end d-none d-md-block">
                     <div class="pt-4">
                        <!-- nav -->
                        <ul class="nav flex-column nav-pills nav-pills-dark">
                           <!-- nav item -->
                           <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="{{route('Order')}}">
                                 Your Orders
                              </a>
                           </li>
                           <!-- nav item -->
                           <li class="nav-item">
                              <a class="nav-link" href="account-settings.html">
                                 Settings
                              </a>
                           </li>
                           <!-- nav item -->
                           <li class="nav-item">
                              <a class="nav-link" href="account-address.html">
                                 Address
                              </a>
                           </li>
                           <!-- nav item -->
                           <li class="nav-item">
                              <a class="nav-link" href="account-payment-method.html">
                                 Payment Method
                              </a>
                           </li>
                           <!-- nav item -->
                           <li class="nav-item">
                              <a class="nav-link" href="account-notification.html">
                                 Notification
                              </a>
                           </li>
                           <!-- nav item -->
                           <li class="nav-item">
                              <hr />
                           </li>
                           <!-- nav item -->
                           <li class="nav-item">
                              <a class="nav-link" href="{{route('SignOut')}}">
                                 Log out
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-9 col-md-9 col-12">
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
                  </div>
               </div>
            </div>
         </section>