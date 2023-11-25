@auth
@extends('Frontend.Partials.Account')

@section('content')
<div class="py-6 p-md-6 p-lg-10">
    <div class="mb-6">
        <!-- heading -->
        <h2 class="mb-0">Notification settings</h2>
    </div>

    <div class="mb-10">
        <!-- text -->
        <div class="border-bottom pb-3 mb-5">
            <h5 class="mb-0">Email Notifications</h5>
        </div>
        <!-- text -->
        <div class="d-flex justify-content-between align-items-center mb-6">
            <div>
                <h6 class="mb-1">Weekly Notification</h6>
                <p class="mb-0">Various versions have evolved over the years, sometimes by accident, sometimes on purpose .</p>
            </div>
            <!-- checkbox -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <!-- text -->
            <div>
                <h6 class="mb-1">Account Summary</h6>
                <p class="mb-0 pe-12">
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eguris eu sollicitudin massa. Nulla ipsum odio, aliquam in odio et, fermentum
                    blandit nulla.
                </p>
            </div>
            <!-- form checkbox -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
            </div>
        </div>
    </div>
    <div class="mb-10">
        <!-- heading -->
        <div class="border-bottom pb-3 mb-5">
            <h5 class="mb-0">Order updates</h5>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-6">
            <div>
                <!-- heading -->
                <h6 class="mb-0">Text messages</h6>
            </div>
            <!-- form checkbox -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault2">
                <label class="form-check-label" for="flexSwitchCheckDefault2"></label>
            </div>
        </div>
        <!-- text -->
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h6 class="mb-1">Call before checkout</h6>
                <p class="mb-0">We'll only call if there are pending changes</p>
            </div>
            <!-- form checkbox -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked2" checked="">
                <label class="form-check-label" for="flexSwitchCheckChecked2"></label>
            </div>
        </div>
    </div>
    <div class="mb-6">
        <!-- text -->
        <div class="border-bottom pb-3 mb-5">
            <h5 class="mb-0">Website Notification</h5>
        </div>
        <div>
            <!-- form checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckFollower" checked="">
                <label class="form-check-label" for="flexCheckFollower">New Follower</label>
            </div>
            <!-- form checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckPost">
                <label class="form-check-label" for="flexCheckPost">Post Like</label>
            </div>
            <!-- form checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckPosted">
                <label class="form-check-label" for="flexCheckPosted">Someone you followed posted</label>
            </div>
            <!-- form checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckCollection">
                <label class="form-check-label" for="flexCheckCollection">Post added to collection</label>
            </div>
            <!-- form checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckOrder">
                <label class="form-check-label" for="flexCheckOrder">Order Delivery</label>
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