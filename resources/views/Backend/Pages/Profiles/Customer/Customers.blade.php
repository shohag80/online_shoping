@extends('Backend.Master')

@section('Container')

<div class="container bg-body-secondary p-3 mt-2">
    <div class="row">

        <div class="col-md-3 text-center bg-warning rounded-right">
            <h4>Customer</h4>
        </div>
        <div class="text-end col-md-6 col-sm-8">
            <a href="" class="btn btn-outline-primary">Filter</a> |
            <a href="" class="btn btn-outline-success">Add Customer</a> |
            <a href="" class="btn btn-outline-info">Export</a>
        </div>
        <div class="col-md-3">
            <form class="form-inline">
                <input class="form-control col-8 mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-info" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<section class="section-padding mb-2">
    <div class="container bg-body-tertiary p-2">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Mobile No.</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
            @foreach($customer_data as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Active</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">View</a>
                        <a href="" class="btn btn-warning btn-sm">Update</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>


@endsection