@extends('Backend.Master')

@section('Container')

<div class="container bg-body-secondary p-3 mt-2">
    <div class="row">

        <div class="col-md-3 text-center bg-warning rounded-right">
            <h4>Last Month Order</h4>
        </div>
        <div class="text-end col-md-6 col-sm-8">
            <a href="" class="btn btn-outline-success">Order Filter</a> |
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
                    <th scope="col">Customer Name</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Area</th>
                    <th scope="col">Item</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Md. Shohag Hossain</td>
                    <td>01975134225</td>
                    <td>01/01/2024</td>
                    <td>Dhaka</td>
                    <td>5</td>
                    <td>.BDT</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm rounded-5">Complete</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">View</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</section>

@endsection