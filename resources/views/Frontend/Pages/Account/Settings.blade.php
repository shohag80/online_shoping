@auth
@extends('Frontend.Partials.Account')

@section('content')
<div class="py-6 p-md-6 p-lg-10">
    <div class="mb-6">
        <!-- heading -->
        <h2 class="mb-0">Account Setting</h2>
    </div>
    <div>
        <!-- heading -->
        <h5 class="mb-4">Account details</h5>
        <div class="row">
            <div class="col-lg-5">
                <!-- form -->
                <form>
                    <!-- input -->
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="jitu chauhan">
                    </div>
                    <!-- input -->
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <!-- input -->
                    <div class="mb-5">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="Phone number">
                    </div>
                    <!-- button -->
                    <div class="mb-3">
                        <button class="btn btn-primary">Save Details</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr class="my-10">
    <div class="pe-lg-14">
        <!-- heading -->
        <h5 class="mb-4">Password</h5>
        <form class="row row-cols-1 row-cols-lg-2">
            <!-- input -->
            <div class="mb-3 col">
                <label class="form-label">New Password</label>
                <input type="password" class="form-control" placeholder="**********">
            </div>
            <!-- input -->
            <div class="mb-3 col">
                <label class="form-label">Current Password</label>
                <input type="password" class="form-control" placeholder="**********">
            </div>
            <!-- input -->
            <div class="col-12">
                <p class="mb-4">
                    Can’t remember your current password?
                    <a href="#">Reset your password.</a>
                </p>
                <a href="#" class="btn btn-primary">Save Password</a>
            </div>
        </form>
    </div>
    <hr class="my-10">
    <div>
        <!-- heading -->
        <h5 class="mb-4">Delete Account</h5>
        <p class="mb-2">Would you like to delete your account?</p>
        <p class="mb-5">This account contain 12 orders, Deleting your account will remove all the order details associated with it.</p>
        <!-- btn -->
        <a href="#" class="btn btn-outline-danger">I want to delete my account</a>
    </div>
</div>
@endsection
@endauth

@guest
@section('login')
@include('Frontend.Partials.Login')
@endsection
@endguest