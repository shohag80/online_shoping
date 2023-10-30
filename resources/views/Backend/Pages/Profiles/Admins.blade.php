@extends('Backend.MasterPro')

@section('Container')

<div class="container bg-body-secondary p-3 mt-4">
    <div class="row">

        <div class="col-md-3 text-center text-success bg-warning rounded-right">
            <h4>Admin List</h4>
        </div>
        <div class="text-end col-md-6 col-sm-8">
            <a href="" class="btn btn-outline-primary">Add Filter</a> |
            <a href="" class="btn btn-outline-success">Add Admin</a> |
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

<section class="section-padding">
    <div class="container bg-body-tertiary p-2">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">PUBLISH DATE</th>
                    <th scope="col">STATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</section>


@endsection