<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>


<body>

    <!-- Header -->

    <div class="container-fluid fixed-top bg-light header">
        <div class="row">
            <h6 class="text-md-center p-3">Welcome to Our <a href="#">Online Shop</a></h6>
        </div>
        <div class="row p-3">
            <div class="col-md-2 text-center">
                <h3 class="text-warning"><b>Online <span class="text-success">Shop</span></b></h3>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-7 col-sm-4">
                        <form class="form-inline">
                            <input class="form-control col-10 mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary active mr-md-1" data-bs-toggle="dropdown" aria-expanded="false">
                                Profiles
                            </button>
                            <ul class="dropdown-menu bg-primary">
                                <li><a class="dropdown-item" href="#">Admins</a></li>
                                <li><a class="dropdown-item" href="#">Suppliers</a></li>
                                <li><a class="dropdown-item" href="#">Customers</a></li>
                                <li><a class="dropdown-item" href="#">Delivery Man</a></li>
                            </ul>

                            <button type="button" class="btn btn-success active mr-md-1" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </button>
                            <ul class="dropdown-menu bg-success">
                                <li><a class="dropdown-item" href="#">Add Category</a></li>
                                <li><a class="dropdown-item" href="#">Category List</a></li>
                            </ul>
                            <button type="button" class="btn btn-info active mr-md-1" data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                            </button>
                            <ul class="dropdown-menu bg-info">
                                <li><a class="dropdown-item" href="#">Add Products</a></li>
                                <li><a class="dropdown-item" href="#">Products List</a></li>
                                <li><a class="dropdown-item" href="#">Products Reviews</a></li>
                            </ul>
                            <button type="button" class="btn btn-warning mr-md-1" data-bs-toggle="dropdown" aria-expanded="false">
                                Orders
                            </button>
                            <ul class="dropdown-menu bg-warning">
                                <li><a class="dropdown-item" href="#">Recents</a></li>
                                <li><a class="dropdown-item" href="#">Last Months</a></li>
                                <li><a class="dropdown-item" href="#">All Orders</a></li>
                            </ul>
                            <button type="button" class="btn btn-danger active" data-bs-toggle="dropdown" aria-expanded="false">
                                Contacts
                            </button>
                            <ul class="dropdown-menu bg-danger">
                                <li><a class="dropdown-item" href="#">Head Office</a></li>
                                <li><a class="dropdown-item" href="#">Customer Care</a></li>
                                <li><a class="dropdown-item" href="#">Suppliers Shops</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Slider -->


    <div class="container">
        <div class="row">
            <div class="slider p-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://thumbs.dreamstime.com/b/mecca-saudi-arabia-october-pilgrims-circle-kaaba-masjid-al-haram-umrah-fewer-muslims-people-socially-distanced-corona-virus-200723142.jpg" class="d-block w-100" alt="">
                            <div class="carousal-caption d-block d-md-block">
                                <h5>Masjidul Haram</h5>
                                <p>This is first Kabla of Muslim Ummah.</p>
                                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <img src="https://thumbs.dreamstime.com/b/mecca-saudi-arabia-october-pilgrims-circle-kaaba-masjid-al-haram-umrah-fewer-muslims-people-socially-distanced-corona-virus-200723142.jpg" class="d-block w-100" alt="">
                            <div class="carousal-caption d-block d-md-block">
                                <h5>Masjidul Haram</h5>
                                <p>This is first Kabla of Muslim Ummah.</p>
                                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                            </div>                        </div>
                        <div class="carousel-item">
                        <img src="https://thumbs.dreamstime.com/b/mecca-saudi-arabia-october-pilgrims-circle-kaaba-masjid-al-haram-umrah-fewer-muslims-people-socially-distanced-corona-virus-200723142.jpg" class="d-block w-100" alt="">
                            <div class="carousal-caption d-block d-md-block">
                                <h5>Masjidul Haram</h5>
                                <p>This is first Kabla of Muslim Ummah.</p>
                                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                            </div>                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>





        </div>
    </div>









    <!-- Start_Slider -->

    <div class="container col-md-11">
        <div class="col-md-12">

        </div>
    </div>



    <!-- End_Slider -->



    <!-- Start_Content -->

    <div class="container">
        @yield('Content')
    </div>

    <!-- End_Content -->


    <!-- Start_Footer -->

    <div class="container-fluid p-5 bg-warning text-center">
        Thanks to visite our <a href="#">Online_Shoping</a> Website
    </div>

    <!-- End_Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>