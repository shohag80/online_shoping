@extends('Backend.Master')
@section('Container')

<h1><i><u>Admin List</u></i></h1>

<a type="button" href="{{route('Admin_Form')}}" class="btn btn-success">Add Admin</a>
<hr />

<div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Sl No</th>
                <th scope="col">Photo</th>
                <th scope="col">Admin Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
@foreach($admin_data as $key=>$item)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>
                    <img style="height: 40px; width: 40px;" src="{{url('uploads/'.$item->photo)}}" alt="">
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>
                    <a type="button" class="btn btn-success">Update</a>
                    <a type="button" class="btn btn-danger">Delete</a>
                </td>
            </tr>
@endforeach
        </tbody>
    </table>
</div>

@endsection