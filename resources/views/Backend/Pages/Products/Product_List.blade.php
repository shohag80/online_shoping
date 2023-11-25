@extends('Backend.Master')

@section('Container')

<div class="container bg-body-secondary p-3 mt-2">
    <div class="row">

        <div class="col-md-3 text-center bg-warning rounded-right">
            <h4>Product Details</h4>
        </div>
        <div class="text-end col-md-6 col-sm-8">
            <a href="" class="btn btn-outline-primary">Filter</a> |
            <a href="{{route('add_product')}}" class="btn btn-outline-success">Add Product</a> |
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
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>
                        <img height="50" width="50" src="{{url('uploads/',$item->photo)}}" alt="photo">
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->brand->name}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>BDT-{{$item->price}}/-</td>
                    <td>{{$item->stock}} pcs</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Active</a>
                    </td>
                    <td class="col-2">
                        <a href="" class="btn btn-success btn-sm">View</a>
                        <a href="" class="btn btn-warning btn-sm">Update</a>
                        <a href="{{route('product_delete',$item->id)}}" class="btn btn-danger btn-sm mt-1">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection