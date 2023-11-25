@auth
@extends('Frontend.Partials.Account')

@section('content')
<div class="py-6 p-md-6 p-lg-10">
    <!-- heading -->
    <div class="d-flex justify-content-between mb-6 align-items-center">
        <h2 class="mb-0">Payment Methods</h2>
        <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">Add Payment</a>
    </div>
    <ul class="list-group list-group-flush">
        <!-- List group item -->
        <li class="list-group-item py-5 px-0">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <!-- img -->
                    <img src="../assets/images/svg-graphics/visa.svg" alt="">
                    <!-- text -->
                    <div class="ms-4">
                        <h5 class="mb-0 h6 h6">**** 1234</h5>
                        <p class="mb-0 small">Expires in 10/2023</p>
                    </div>
                </div>
                <div>
                    <!-- button -->
                    <a href="#" class="btn btn-outline-gray-400 disabled btn-sm">Remove</a>
                </div>
            </div>
        </li>
        <!-- List group item -->
        <li class="list-group-item px-0 py-5">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <!-- img -->
                    <img src="../assets/images/svg-graphics/mastercard.svg" alt="" class="me-3">
                    <div>
                        <h5 class="mb-0 h6">Mastercard ending in 1234</h5>
                        <p class="mb-0 small">Expires in 03/2026</p>
                    </div>
                </div>
                <div>
                    <!-- button-->
                    <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                </div>
            </div>
        </li>
        <!-- List group item -->
        <li class="list-group-item px-0 py-5">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <!-- img -->
                    <img src="../assets/images/svg-graphics/discover.svg" alt="" class="me-3">
                    <div>
                        <!-- text -->
                        <h5 class="mb-0 h6">Discover ending in 1234</h5>
                        <p class="mb-0 small">
                            Expires in 07/2020
                            <span class="badge bg-warning text-dark">This card is expired.</span>
                        </p>
                    </div>
                </div>
                <div>
                    <!-- btn -->
                    <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                </div>
            </div>
        </li>
        <!-- List group item -->
        <li class="list-group-item px-0 py-5">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <!-- img -->
                    <img src="../assets/images/svg-graphics/americanexpress.svg" alt="" class="me-3">
                    <!-- text -->
                    <div>
                        <h5 class="mb-0 h6">American Express ending in 1234</h5>
                        <p class="mb-0 small">Expires in 12/2021</p>
                    </div>
                </div>
                <div>
                    <!-- btn -->
                    <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                </div>
            </div>
        </li>
        <!-- List group item -->
        <li class="list-group-item px-0 py-5 border-bottom">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <!-- img -->
                    <img src="../assets/images/svg-graphics/paypal.svg" alt="" class="me-3">
                    <div>
                        <!-- text -->
                        <h5 class="mb-0 h6">Paypal Express ending in 1234</h5>
                        <p class="mb-0 small">Expires in 10/2021</p>
                    </div>
                </div>
                <div>
                    <!-- btn -->
                    <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                </div>
            </div>
        </li>
    </ul>
</div>
@endsection
@endauth

@guest
@section('login')
@include('Frontend.Partials.Login')
@endsection
@endguest