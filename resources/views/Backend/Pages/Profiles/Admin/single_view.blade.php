@extends('Backend.Master')

@section('Container')


<!-- Admin Profile Modal -->

<div class="container border">
    <img class="col-md-2 offset-md-5 pt-4" width="200" src="{{ url('uploads/'.auth()->guard('admin')->user()->photo) }}" alt="">
    <h5 class="modal-title fs-3 fw-bold text-center" id="userModalLabel">name</h5>
</div>

<div class="modal-body">

    <div class="row g-3">
        <!-- col -->
        <div class="col-12">
            <div class="row">
                <div>Role : </div>
            </div>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="col-2">Email</div>
                <div class="col-1">:</div>
                <div class="col-8">{{auth()->guard('admin')->user()->email}}</div>
            </div>
        </div>

        <div class="col-12 pb-2">
            <div class="row">
                <div class="col-2">Number</div>
                <div class="col-1">:</div>
                <div class="col-8">{{auth()->guard('admin')->user()->phone}}</div>
            </div>
        </div>
    </div>

</div>

@endsection