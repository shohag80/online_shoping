@extends('Backend.Master')

@section('Container')

<div class="container bg-body-secondary p-3 mt-2">
    <div class="row">

        <div class="col-md-3 text-center bg-warning rounded-right">
            <h4>Admin</h4>
        </div>
        <div class="text-end col-md-6 col-sm-8">
            <a href="" class="btn btn-outline-primary">Filter</a> |
            <a href="{{route('Admin_Form')}}" class="btn btn-outline-success">Add Admin</a> |
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
                    <th scope="col">Role</th>
                    <th scope="col">Contact</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admin_data as $key=>$item)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>
                        <img style="height: 40px; width: 40px;" src="{{url('uploads/',$item->photo)}}" alt="admin_photo">
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->role}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Active</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">View</a>
                        <a href="{{route('Admin_Update',$item->id)}}" class="btn btn-warning btn-sm mt-1">Update</a>
                        <a href="{{route('Admin_Delete',$item->id)}}" class="btn btn-danger btn-sm mt-1">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>


@endsection