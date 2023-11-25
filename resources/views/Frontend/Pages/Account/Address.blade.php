@auth
@extends('Frontend.Partials.Account')

@section('content')
<div class="py-6 p-md-6 p-lg-10">
    <div class="d-flex justify-content-between mb-6">
        <!-- heading -->
        <h2 class="mb-0">Address</h2>
        <!-- button -->
        <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addAddressModal">Add a new address</a>
    </div>
    <div class="row">
        <!-- col -->
        <div class="col-lg-5 col-xxl-4 col-12 mb-4">
            <!-- form -->
            <div class="card">
                <div class="card-body p-6">
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="homeRadio" checked="">
                        <label class="form-check-label text-dark fw-semibold" for="homeRadio">Home</label>
                    </div>
                    <!-- address -->
                    <p class="mb-6">
                        Jitu Chauhan
                        <br>

                        4450 North Avenue Oakland,
                        <br>

                        Nebraska, United States,
                        <br>

                        402-776-1106
                    </p>
                    <!-- btn -->
                    <a href="#" class="btn btn-info btn-sm">Default address</a>
                    <div class="mt-4">
                        <a href="#" class="text-inherit">Edit</a>
                        <a href="#" class="text-danger ms-3" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-xxl-4 col-12 mb-4">
            <!-- input -->
            <div class="card">
                <div class="card-body p-6">
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="officeRadio">
                        <label class="form-check-label text-dark fw-semibold" for="officeRadio">Office</label>
                    </div>
                    <!-- nav item -->
                    <p class="mb-6">
                        Nitu Chauhan
                        <br>

                        3853 Coal Road
                        <br>

                        Tannersville, Pennsylvania, 18372, United States
                        <br>

                        402-776-1106
                    </p>
                    <!-- link -->
                    <a href="#" class="link-primary">Set as Default</a>
                    <div class="mt-4">
                        <a href="#" class="text-inherit">Edit</a>
                        <!-- btn -->
                        <a href="#" class="text-danger ms-3" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@endauth

@guest
@section('login')
@include('Frontend.Partials.Login')
@endsection
@endguest