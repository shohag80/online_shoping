<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Header -->
    <section>
        <div class="container-fluid bg-light stickey_header">
            <div class="row bg-info">
                <h5 class="text-md-center text-white pt-3">ٱلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ ٱللَّٰهِ وَبَرَكَاتُهُ</h5>
            </div>
        </div>

        <div class="container-fluid header_banner p-3">
            <div class="row p-2">
                <div class="col-md-3 text-center">
                    <h3 class="text-warning"><b>Online <span class="text-success">Shop</span></b></h3>
                </div>
                <div class="col-md-6 ">
                    <form class="form-inline">
                        <input class="form-control ml-3 col-10 mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center bg-warning p-2">
                    <div class="btn-group text-white">
                        <a class="btn mr-md-2" href="{{route('Home')}}">Home</a>
                        <button type="button" class="btn dropdown-toggle mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item profile-btn" href="{{route('Admins')}}">Admin</a></li>
                            <li><a class="dropdown-item profile-btn" href="{{route('Supplier')}}">Supplier</a></li>
                            <li><a class="dropdown-item profile-btn" href="{{route('Customers')}}">Customer</a></li>
                            <li><a class="dropdown-item profile-btn" href="{{route('delivery')}}">Delivery Man</a></li>
                        </ul>
                        <button type="button" class="btn dropdown-toggle mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">Category</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('add_category_pro')}}">Add Category</a></li>
                            <li><a class="dropdown-item" href="{{route('category_list_pro')}}">Category List</a></li>
                        </ul>
                        <button type="button" class="btn dropdown-toggle mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">Brand</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('Add_Brand_Pro')}}">Add</a></li>
                            <li><a class="dropdown-item" href="{{route('All_Brands_Pro')}}">All Brand</a></li>
                        </ul>
                        <button type="button" class="btn dropdown-toggle mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">Product</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('add_product_pro')}}">Add</a></li>
                            <li><a class="dropdown-item" href="{{route('product_list_pro')}}">All Product</a></li>
                            <li><a class="dropdown-item" href="{{route('product_reviews')}}">Reviews</a></li>
                        </ul>
                        <button type="button" class="btn dropdown-toggle mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">Orders</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('Recent')}}">Recent</a></li>
                            <li><a class="dropdown-item" href="{{route('Last_Month')}}">Last Month</a></li>
                            <li><a class="dropdown-item" href="{{route('All_Orders')}}">All Orders</a></li>
                        </ul>
                        <button type="button" class="btn dropdown-toggle mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">Delivery</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('Delivery_Panding')}}">Panding</a></li>
                            <li><a class="dropdown-item" href="{{route('Delivery_Processing')}}">Processing</a></li>
                            <li><a class="dropdown-item" href="{{route('Delivery_Complete')}}">Complete</a></li>
                        </ul>
                        <button type="button" class="btn dropdown-toggle mr-md-2" data-bs-toggle="dropdown" aria-expanded="false">Contacts</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-white contact-btn" href="{{route('Head_Office')}}">Head Office</a></li>
                            <li><a class="dropdown-item text-white contact-btn" href="{{route('Customer_Care')}}">Customer Care</a></li>
                            <li><a class="dropdown-item text-white contact-btn" href="{{route('Supplier_Shops')}}">Suppliers Shops</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider -->


    @yield('Slider_Pro')


    <!-- Content -->

    <div class="container">
        @yield('Container')
    </div>



    <!-- Start_Footer -->
    <div class="container-fluid p-3 bg-light text-center">
        Thanks to visite our <a href="#">Online_Shoping</a> Website
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>