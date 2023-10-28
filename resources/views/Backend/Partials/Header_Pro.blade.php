<div class="container-fluid bg-light fixed-top header">
        <div class="row">
            <h5 class="text-md-center pt-3">ٱلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ ٱللَّٰهِ وَبَرَكَاتُهُ</h5>
        </div>
        <div class="row p-2">
            <div class="col-md-2 text-center">
                <h3 class="text-warning"><b>Online <span class="text-success">Shop</span></b></h3>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-5 col-sm-4">
                        <form class="form-inline">
                            <input class="form-control col-9 mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <div class="btn-group">

                            <a type="button" href="{{route('Home')}}" class="btn btn-primary text-white mr-md-1">
                                Home
                            </a>

                            <button type="button" class="btn btn-info mr-md-1" data-bs-toggle="dropdown" aria-expanded="false">
                                Profiles
                            </button>
                            <ul class="dropdown-menu bg-info">
                                <li><a class="dropdown-item profile-btn" href="{{route('Admins')}}">Admins</a></li>
                                <li><a class="dropdown-item profile-btn" href="{{route('Supplier')}}">Suppliers</a></li>
                                <li><a class="dropdown-item profile-btn" href="{{route('Customers')}}">Customers</a></li>
                                <li><a class="dropdown-item profile-btn" href="{{route('delivery')}}">Delivery Man</a></li>
                            </ul>

                            <button type="button" class="btn btn-secondary mr-md-1" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </button>
                            <ul class="dropdown-menu bg-secondary">
                                <li><a class="dropdown-item" href="{{route('add_category_pro')}}">Add Category</a></li>
                                <li><a class="dropdown-item" href="{{route('category_list_pro')}}">Category List</a></li>
                            </ul>
                            <button type="button" class="btn btn-success border mr-md-1" data-bs-toggle="dropdown" aria-expanded="false">
                                Brands
                            </button>
                            <ul class="dropdown-menu bg-success">
                                <li><a class="dropdown-item" href="{{route('add_category_pro')}}">Add</a></li>
                                <li><a class="dropdown-item" href="{{route('category_list_pro')}}">ALL Brands</a></li>
                            </ul>
                            <button type="button" class="btn btn-danger  mr-md-1" data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                            </button>
                            <ul class="dropdown-menu bg-danger">
                                <li><a class="dropdown-item" href="{{route('add_product_pro')}}">Add Products</a></li>
                                <li><a class="dropdown-item" href="{{route('product_list_pro')}}">Products List</a></li>
                                <li><a class="dropdown-item" href="{{route('product_reviews')}}">Products Reviews</a></li>
                            </ul>
                            <button type="button" class="btn btn-warning mr-md-1" data-bs-toggle="dropdown" aria-expanded="false">
                                Orders
                            </button>
                            <ul class="dropdown-menu bg-warning">
                                <li><a class="dropdown-item" href="#">Recents</a></li>
                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                <li><a class="dropdown-item" href="#">All Orders</a></li>
                            </ul>
                            <button type="button" class="btn btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                Contacts
                            </button>
                            <ul class="dropdown-menu bg-dark">
                                <li><a class="dropdown-item text-white contact-btn" href="#">Head Office</a></li>
                                <li><a class="dropdown-item text-white contact-btn" href="#">Customer Care</a></li>
                                <li><a class="dropdown-item text-white contact-btn" href="#">Suppliers Shops</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>