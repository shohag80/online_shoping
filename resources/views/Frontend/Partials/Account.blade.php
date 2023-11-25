@extends('Frontend.Master')

@section('my_account')
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
                            <a class="nav-link" aria-current="page" href="{{route('Order')}}">
                                Your Orders
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('Settings')}}">
                                Settings
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('Address')}}">
                                Address
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('Payment')}}">
                                Payment Method
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('Notification')}}">
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
                @yield('content')
            </div>
        </div>
    </div>
</section>
@endsection