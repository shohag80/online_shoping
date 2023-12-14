<!-- Header -->
<style>
    .dropdown:hover>.dropdown-menu {
        display: block;
    }

    .dropdown>.dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
        pointer-events: none;
    }
</style>
<section>
    <div class="container-fluid bg-light stickey_header">
        <div class="row bg-info">
            <h5 class="text-md-center text-white pt-3">ٱلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ ٱللَّٰهِ وَبَرَكَاتُهُ</h5>
        </div>
    </div>

    <div class="container-fluid header_banner p-3">
        <div class="row p-2">
            <div class="col-md-3 text-center">
                <a style="text-decoration: none;" href="{{route('Home')}}">
                    <h3 class="text-warning"><b>Online <span class="text-success">Shop</span></b></h3>
                </a>
            </div>
            <div class="col-md-6">
                <form class="form-inline">
                    <input class="form-control ml-3 col-10 mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-3">
                <div class="rowlist-inline-item">
                    <a href="#!" style="text-decoration: none;" class="row text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                        <div class="col-md-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="col-md-10">
                            {{auth()->guard('admin')->user()->name}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Admin Profile Modal -->

    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container modal-content p-5">
                <div class="container">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="text-center rounded-5">
                            <img style="border-radius: 10%; margin-left: 110px" height="150" width="150" src="{{ url('uploads/'.auth()->guard('admin')->user()->photo) }}" alt="">
                            <div class="mt-2">
                                <input type="button" class="btn btn-sm btn-primary" value="Change" terget="profilePicture" />
                                <input type="file" style="display: none;" id="profilePicture" name="file" />
                            </div>
                        </div>
                    </div>

                    <div class="modal-header border-primary">
                        <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">{{auth()->guard('admin')->user()->name}}</h5>
                    </div>

                </div>

                <div class="modal-body">

                    <div class="row g-3">
                        <!-- col -->
                        <div class="col-12">
                            <div class="row">
                                <div class="col-2">Role</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{auth()->guard('admin')->user()->role}}</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-2">Email</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{auth()->guard('admin')->user()->email}}</div>
                            </div>
                        </div>

                        <div class="col-12 pb-2">
                            <div class="row">
                                <div class="col-2">Number</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{auth()->guard('admin')->user()->phone}}</div>
                            </div>
                        </div>
                    </div>

                </div>
                <button type="button" class="btn btn-warning mb-3">
                    <a class="nav-link" href="{{route('Logout')}}">
                        Log out
                    </a>
                </button>
            </div>
        </div>
    </div>



    <!-- Navbar Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center bg-warning p-2">
                <div class="btn-group text-white">
                    <a class="btn mr-md-2" href="{{route('Home')}}">Home</a>


                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                            Profile
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item profile-btn" href="{{route('Admins')}}">Admin</a></li>
                            <li><a class="dropdown-item profile-btn" href="{{route('Supplier')}}">Supplier</a></li>
                            <li><a class="dropdown-item profile-btn" href="{{route('Customers')}}">Customer</a></li>
                            <li><a class="dropdown-item profile-btn" href="{{route('delivery')}}">Delivery Man</a></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">Category</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{route('add_category')}}">Add Category</a></li>
                            <li><a class="dropdown-item" href="{{route('category_list')}}">All Category</a></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">Brand</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{route('add_brand')}}">Add</a></li>
                            <li><a class="dropdown-item" href="{{route('brnad_list')}}">All Brand</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">Product</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{route('add_product')}}">Add</a></li>
                            <li><a class="dropdown-item" href="{{route('product_list')}}">All Product</a></li>
                            <li><a class="dropdown-item" href="{{route('product_reviews')}}">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">Orders</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{route('Recent')}}">Recent</a></li>
                            <li><a class="dropdown-item" href="{{route('Last_Month')}}">Last Month</a></li>
                            <li><a class="dropdown-item" href="{{route('All_Orders')}}">All Orders</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">Delivery</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{route('Delivery_Panding')}}">Panding</a></li>
                            <li><a class="dropdown-item" href="{{route('Delivery_Processing')}}">Processing</a></li>
                            <li><a class="dropdown-item" href="{{route('Delivery_Complete')}}">Complete</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">Contacts</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item contact-btn" href="{{route('Head_Office')}}">Head Office</a></li>
                            <li><a class="dropdown-item contact-btn" href="{{route('Customer_Care')}}">Customer Care</a></li>
                            <li><a class="dropdown-item contact-btn" href="{{route('Supplier_Shops')}}">Suppliers Shops</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider -->