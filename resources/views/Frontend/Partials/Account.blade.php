@extends('Frontend.Master')

@section('my_account')
<!-- section -->
<section>
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-lg-2 col-md-2 col-12 border-end d-none d-md-block">
                <div class="pt-4">
                    <!-- nav -->
                    <ul class="nav flex-column nav-pills nav-pills-dark">
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('Cart')}}">
                                Cart Items
                            </a>
                        </li>
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