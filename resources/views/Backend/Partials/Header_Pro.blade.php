<div class="container-fluid bg-light stickey_header header">
        <div class="row">
            <h5 class="text-md-center pt-3">ٱلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ ٱللَّٰهِ وَبَرَكَاتُهُ</h5>
        </div>
        <div class="row p-2">
            <div class="col-md-2 text-center">
                <h3 class="text-warning"><b>Online <span class="text-success">Shop</span></b></h3>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <form class="form-inline">
                            <input class="form-control col-9 mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="btn-group">

                            <a type="button" href="{{route('Home')}}" class="btn btn-primary text-white mr-md-2">
                                Home
                            </a>

                            <button type="button" class="btn btn-info mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </button>
                            <ul class="dropdown-menu bg-info">
                                <li><a class="dropdown-item profile-btn" href="{{route('Admins')}}">Admin</a></li>
                                <li><a class="dropdown-item profile-btn" href="{{route('Supplier')}}">Supplier</a></li>
                                <li><a class="dropdown-item profile-btn" href="{{route('Customers')}}">Customer</a></li>
                                <li><a class="dropdown-item profile-btn" href="{{route('delivery')}}">Delivery Man</a></li>
                            </ul>

                            <button type="button" class="btn btn-secondary mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </button>
                            <ul class="dropdown-menu bg-secondary">
                                <li><a class="dropdown-item" href="{{route('add_category_pro')}}">Add Category</a></li>
                                <li><a class="dropdown-item" href="{{route('category_list_pro')}}">Category List</a></li>
                            </ul>
                            <button type="button" class="btn btn-success border mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">
                                Brand
                            </button>
                            <ul class="dropdown-menu bg-success">
                                <li><a class="dropdown-item" href="{{route('Add_Brand_Pro')}}">Add</a></li>
                                <li><a class="dropdown-item" href="{{route('All_Brands_Pro')}}">All Brand</a></li>
                            </ul>
                            <button type="button" class="btn btn-danger  mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">
                                Product
                            </button>
                            <ul class="dropdown-menu bg-danger">
                                <li><a class="dropdown-item" href="{{route('add_product_pro')}}">Add</a></li>
                                <li><a class="dropdown-item" href="{{route('product_list_pro')}}">All Product</a></li>
                                <li><a class="dropdown-item" href="{{route('product_reviews')}}">Reviews</a></li>
                            </ul>
                            <button type="button" class="btn btn-warning mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">
                                Orders
                            </button>
                            <ul class="dropdown-menu bg-warning">
                                <li><a class="dropdown-item" href="{{route('Recent')}}">Recent</a></li>
                                <li><a class="dropdown-item" href="{{route('Last_Month')}}">Last Month</a></li>
                                <li><a class="dropdown-item" href="{{route('All_Orders')}}">All Orders</a></li>
                            </ul>
                            <button type="button" class="btn btn-white border mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">
                                Delivery
                            </button>
                            <ul class="dropdown-menu bg-white">
                                <li><a class="dropdown-item" href="{{route('Delivery_Panding')}}">Panding</a></li>
                                <li><a class="dropdown-item" href="{{route('Delivery_Processing')}}">Processing</a></li>
                                <li><a class="dropdown-item" href="{{route('Delivery_Complete')}}">Complete</a></li>
                            </ul>
                            <button type="button" class="btn btn-dark mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">
                                Contacts
                            </button>
                            <ul class="dropdown-menu bg-dark">
                                <li><a class="dropdown-item text-white contact-btn" href="{{route('Head_Office')}}">Head Office</a></li>
                                <li><a class="dropdown-item text-white contact-btn" href="{{route('Customer_Care')}}">Customer Care</a></li>
                                <li><a class="dropdown-item text-white contact-btn" href="{{route('Supplier_Shops')}}">Suppliers Shops</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>