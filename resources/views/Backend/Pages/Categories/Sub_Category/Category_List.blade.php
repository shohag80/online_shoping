@extends('Backend.Master')

@section('Container')

<div class="container bg-body-secondary p-3 mt-2">
    <div class="row">

        <div class="col-md-3 text-center bg-warning rounded-right">
            <h4>Sub-Category Details</h4>
        </div>
        <div class="text-end col-md-6 col-sm-8">
            <a href="" class="btn btn-outline-primary">Filter</a> |
            <a href="" class="btn btn-outline-success">Add Sub-Category</a> |
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
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Sub Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sub_category as $key=>$item)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>
                        <img height="50px" width="50px" src="{{url('uploads/',$item->photo)}}" alt="photo">
                    </td>
                    <td>{{$item->category->name}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <a href="" class="btn btn-outline-primary btn-sm">Active</a>
                    </td>
                    <td class="col-3">
                        <a href="" class="btn btn-primary btn-sm">View</a>
                        <a href="{{route('category_update',$item->id)}}" class="btn btn-warning btn-sm">Update</a>
                        <a href="{{route('category_delete',$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>


@endsection