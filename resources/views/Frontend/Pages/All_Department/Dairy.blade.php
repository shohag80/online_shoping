@extends('Frontend.Master')

@section('department')
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
               <div class="modal-header border-0">
                  <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form class="needs-validation" novalidate>
                     <div class="mb-3">
                        <label for="fullName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required />
                        <div class="invalid-feedback">Please enter name.</div>
                     </div>
                     <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email address" required />
                        <div class="invalid-feedback">Please enter email.</div>
                     </div>
                     <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" required />
                        <div class="invalid-feedback">Please enter password.</div>
                        <small class="form-text">
                           By Signup, you agree to our
                           <a href="#!">Terms of Service</a>
                           &
                           <a href="#!">Privacy Policy</a>
                        </small>
                     </div>

                     <button type="submit" class="btn btn-primary" type="submit">Sign Up</button>
                  </form>
               </div>
               <div class="modal-footer border-0 justify-content-center">
                  Already have an account?
                  <a href="#">Sign in</a>
               </div>
            </div>
         </div>
      </div>

      <!-- Shop Cart -->

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
         <div class="offcanvas-header border-bottom">
            <div class="text-start">
               <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
               <small>Location in 382480</small>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
            <div>
               <!-- alert -->
               <div class="alert alert-danger p-2" role="alert">
                  You’ve got FREE delivery. Start
                  <a href="#!" class="alert-link">checkout now!</a>
               </div>
               <ul class="list-group list-group-flush">
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0 border-top">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="../pages/shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                 </a>
                                 <span><small class="text-muted">.98 / lb</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$5.00</span>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <a href="../pages/shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">NutriChoice Digestive</h6>
                                 </a>
                                 <span><small class="text-muted">250g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold text-danger">$20.00</span>
                           <div class="text-decoration-line-through text-muted small">$26.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="../pages/shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                 </a>
                                 <span><small class="text-muted">1 kg</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-4.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <!-- title -->
                                 <a href="../pages/shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Onion Flavour Potato</h6>
                                 </a>
                                 <span><small class="text-muted">250g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0 border-bottom">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-5.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="../pages/shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Salted Instant Popcorn</h6>
                                 </a>
                                 <span><small class="text-muted">100g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$25.00</div>
                        </div>
                     </div>
                  </li>
               </ul>
               <!-- btn -->
               <div class="d-flex justify-content-between mt-4">
                  <a href="#!" class="btn btn-primary">Continue Shopping</a>
                  <a href="#!" class="btn btn-dark">Update Cart</a>
               </div>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body p-6">
                  <div class="d-flex justify-content-between align-items-start">
                     <div>
                        <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
                        <p class="mb-0 small">Enter your address and we will specify the offer you area.</p>
                     </div>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="my-5">
                     <input type="search" class="form-control" placeholder="Search your area" />
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                     <h6 class="mb-0">Select Location</h6>
                     <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>
                  </div>
                  <div>
                     <div data-simplebar style="height: 300px">
                        <div class="list-group list-group-flush">
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                              <span>Alabama</span>
                              <span>Min:$20</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Alaska</span>
                              <span>Min:$30</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Arizona</span>
                              <span>Min:$50</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>California</span>
                              <span>Min:$29</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Colorado</span>
                              <span>Min:$80</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Florida</span>
                              <span>Min:$90</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Arizona</span>
                              <span>Min:$50</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>California</span>
                              <span>Min:$29</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Colorado</span>
                              <span>Min:$80</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Florida</span>
                              <span>Min:$90</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script src="../assets/js/vendors/validation.js"></script>

      <main>
        
         <!-- section -->
         <div class="mt-8 mb-lg-14 mb-8">
            <!-- container -->
            <div class="container">
               <!-- row -->
               <div class="row gx-10">
                  <!-- col -->
                  <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
                     <div class="offcanvas offcanvas-start offcanvas-collapse w-md-50" tabindex="-1" id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">
                        <div class="offcanvas-header d-lg-none">
                           <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ps-lg-2 pt-lg-0">
                           <div class="mb-8">
                              <!-- title -->
                              <h5 class="mb-3">Categories</h5>
                              <!-- nav -->
                              <ul class="nav nav-category" id="categoryCollapseMenu">
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#categoryFlushOne" aria-expanded="false" aria-controls="categoryFlushOne">
                                       Dairy, Bread & Eggs
                                       
                                    </a>
                                    <!-- accordion collapse -->
                                    <div id="categoryFlushOne" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <!-- nav -->

                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Milk</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Milk Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Curd & Yogurt</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Eggs</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Bread</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Buns & Bakery</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Butter & More</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Cheese</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Paneer & Tofu</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Cream & Whitener</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Condensed Milk</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Vegan Drinks</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <!-- nav item -->
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                       Snacks & Munchies
                                       
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Chips & Crisps</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Nachos</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Popcorn</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Bhujia & Mixtures</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Namkeen Snacks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Healthy Snacks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Cakes & Rolls</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Energy Bars</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Papad & Fryums</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Rusks & Wafers</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                       Fruits & Vegetables
                                       
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Fresh Vegetables</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Herbs & Seasonings</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Fresh Fruits</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Organic Fruits & Vegetables</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Cuts & Sprouts</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Exotic Fruits & Veggies</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Flower Bouquets, Bunches</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                       Cold Drinks & Juices
                                       
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Soft Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Fruit Juices</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Coldpress</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Energy Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Water & Ice Cubes</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Soda & Mixers</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Concentrates & Syrups</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Detox & Energy Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Juice Collection</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>

                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                       Breakfast & Instant Food
                                       
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Batter</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Breakfast Cereal</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Noodles, Pasta & Soup</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Frozen Non-Veg Snackss</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Frozen Veg</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Vermicelli</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Instant Mixes</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                       Bakery & Biscuits
                                       
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Cookies</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Glucose & Marie</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Sweet & Salty</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Healthy & Digestive</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Cream Biscuits</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Rusks & Wafers</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Cakes & Rolls</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Buns & Bakery</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                       Chicken, Meat & Fish
                                       
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Chicken</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Sausage, Salami & Ham</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Exotic Meat</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Eggs</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Frozen Non-Veg Snacks</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>

                           <div class="mb-8">
                              <h5 class="mb-3">Stores</h5>
                              <div class="my-4">
                                 <!-- input -->
                                 <input type="search" class="form-control" placeholder="Search by store" />
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="eGrocery" checked />
                                 <label class="form-check-label" for="eGrocery">E-Grocery</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="DealShare" />
                                 <label class="form-check-label" for="DealShare">DealShare</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="Dmart" />
                                 <label class="form-check-label" for="Dmart">DMart</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="Blinkit" />
                                 <label class="form-check-label" for="Blinkit">Blinkit</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="BigBasket" />
                                 <label class="form-check-label" for="BigBasket">BigBasket</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="StoreFront" />
                                 <label class="form-check-label" for="StoreFront">StoreFront</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="Spencers" />
                                 <label class="form-check-label" for="Spencers">Spencers</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="onlineGrocery" />
                                 <label class="form-check-label" for="onlineGrocery">Online Grocery</label>
                              </div>
                           </div>
                           <div class="mb-8">
                              <!-- price -->
                              <h5 class="mb-3">Price</h5>
                              <div>
                                 <!-- range -->
                                 <div id="priceRange" class="mb-3"></div>
                                 <small class="text-muted">Price:</small>
                                 <span id="priceRange-value" class="small"></span>
                              </div>
                           </div>
                           <!-- rating -->
                           <div class="mb-8">
                              <h5 class="mb-3">Rating</h5>
                              <div>
                                 <!-- form check -->
                                 <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingFive" />
                                    <label class="form-check-label" for="ratingFive">
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                    </label>
                                 </div>
                                 <!-- form check -->
                                 <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingFour" checked />
                                    <label class="form-check-label" for="ratingFour">
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                    </label>
                                 </div>
                                 <!-- form check -->
                                 <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingThree" />
                                    <label class="form-check-label" for="ratingThree">
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                    </label>
                                 </div>
                                 <!-- form check -->
                                 <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingTwo" />
                                    <label class="form-check-label" for="ratingTwo">
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                    </label>
                                 </div>
                                 <!-- form check -->
                                 <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingOne" />
                                    <label class="form-check-label" for="ratingOne">
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="mb-8 position-relative">
                              <!-- Banner Design -->
                              <!-- Banner Content -->
                              <div class="position-absolute p-5 py-8">
                                 <h3 class="mb-0">Fresh Fruits</h3>
                                 <p>Get Upto 25% Off</p>
                                 <a href="#" class="btn btn-dark">
                                    Shop Now
                                    <i class="feather-icon icon-arrow-right ms-1"></i>
                                 </a>
                              </div>
                              <!-- Banner Content -->
                              <!-- Banner Image -->
                              <!-- img -->
                              <img src="../assets/images/banner/assortment-citrus-fruits.png" alt="" class="img-fluid rounded" />
                              <!-- Banner Image -->
                           </div>
                        </div>
                     </div>
                  </aside>
                  <section class="col-lg-9 col-md-12">
                     <!-- card -->
                     <div class="card mb-4 bg-light border-0">
                        <!-- card body -->
                        <div class="card-body p-9">
                           <h2 class="mb-0 fs-1">Snacks & Munchies</h2>
                        </div>
                     </div>
                     <!-- list icon -->
                     <div class="d-lg-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-lg-0">
                           <p class="mb-0">
                              <span class="text-dark">24</span>
                              Products found
                           </p>
                        </div>

                        <!-- icon -->
                        <div class="d-md-flex justify-content-between align-items-center">
                           <div class="d-flex align-items-center justify-content-between">
                              <div>
                                 <a href="shop-list.html" class="text-muted me-3"><i class="bi bi-list-ul"></i></a>
                                 <a href="shop-grid.html" class="me-3 active"><i class="bi bi-grid"></i></a>
                                 <a href="shop-grid-3-column.html" class="me-3 text-muted"><i class="bi bi-grid-3x3-gap"></i></a>
                              </div>
                              <div class="ms-2 d-lg-none">
                                 <a class="btn btn-outline-gray-400 text-muted" data-bs-toggle="offcanvas" href="#offcanvasCategory" role="button" aria-controls="offcanvasCategory">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="14"
                                       height="14"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-filter me-2">
                                       <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                    </svg>
                                    Filters
                                 </a>
                              </div>
                           </div>

                           <div class="d-flex mt-2 mt-lg-0">
                              <div class="me-2 flex-grow-1">
                                 <!-- select option -->
                                 <select class="form-select">
                                    <option selected>Show: 50</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                 </select>
                              </div>
                              <div>
                                 <!-- select option -->
                                 <select class="form-select">
                                    <option selected>Sort by: Featured</option>
                                    <option value="Low to High">Price: Low to High</option>
                                    <option value="High to Low">Price: High to Low</option>
                                    <option value="Release Date">Release Date</option>
                                    <option value="Avg. Rating">Avg. Rating</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
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
                     <div class="row mt-8">
                        <div class="col">
                           <!-- nav -->
                           <nav>
                              <ul class="pagination">
                                 <li class="page-item disabled">
                                    <a class="page-link mx-1" href="#" aria-label="Previous">
                                       <i class="feather-icon icon-chevron-left"></i>
                                    </a>
                                 </li>
                                 <li class="page-item"><a class="page-link mx-1 active" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link mx-1" href="#">2</a></li>

                                 <li class="page-item"><a class="page-link mx-1" href="#">...</a></li>
                                 <li class="page-item"><a class="page-link mx-1" href="#">12</a></li>
                                 <li class="page-item">
                                    <a class="page-link mx-1" href="#" aria-label="Next"></a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </main>

      <!-- modal -->
      <!-- Modal -->
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
                           <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-1.jpg)">
                              <!-- img -->
                              <img src="../assets/images/products/product-single-img-1.jpg" alt="" />
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-2.jpg)">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-2.jpg" alt="" />
                              </div>
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-3.jpg)">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-3.jpg" alt="" />
                              </div>
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-4.jpg)">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-4.jpg" alt="" />
                              </div>
                           </div>
                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                           <div class="thumbnails row g-3" id="productModalThumbnails">
                              <div class="col-3" class="tns-nav-active">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-1.jpg" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-2.jpg" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-3.jpg" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-4.jpg" alt="" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="ps-lg-8 mt-6 mt-lg-0">
                           <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
                           <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
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
                           <hr class="my-6"/>
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
</div>


@endsection