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
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </tbody>
    </table>
</div>

@endsection