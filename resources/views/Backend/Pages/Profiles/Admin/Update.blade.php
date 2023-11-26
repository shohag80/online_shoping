@extends('Backend.Master')

@section('Container')

<div class="container">
    <div class="row pt-3 pb-3">
        <div class="col-md-3"></div>
        <div class="col-md-6 pb-4 bg-body-secondary border rounded">
            <div class="row bg-success pt-5 pb-2 mb-2 rounded">
                <h3 class="text-center text-white"><span class="text-warning">Add</span> Admin</h3>
            </div>
            <form action="{{route('Admin_Update_Store',$update->id)}}" method="post" enctype="multipart/form-data" class="p-4">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="exampleInputAdmin" class="form-label">Name</label><span class="text-danger">*</span>
                    <input type="text" required name="name" value="{{$update->name}}" class="form-control" id="exampleInputAdmin">
                </div>
                <div class="mb-3">
                    <label for="exampleInputAdmin" class="form-label">Role</label><span class="text-danger">*</span>
                    <select type="text" required name="role" value="{{$update->role}}" class="form-control" id="exampleInputAdmin">
                        <option >Choose Your Role</option>
                        <option value="Admin">Admin</option>
                        <option value="Manager">Manager</option>
                        <option value="Assistant_Manager">Assistant Manager</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputAdmin" class="form-label">Phone Number</label><span class="text-danger">*</span>
                    <input type="number" required name="phone" value="{{$update->phone}}" class="form-control" id="exampleInputAdmin">
                </div>
                <div class="mb-3">
                    <label for="exampleInputAdmin" class="form-label">E-mail</label><span class="text-danger">*</span>
                    <input type="email" required name="email" value="{{$update->email}}" class="form-control" id="exampleInputAdmin">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhoto" class="form-label">Photo</label>
                    <input type="file" name="photo" value="{{$update->photo}}" class="form-control" id="exampleInputPhoto">
                </div>
                <button type="submit" class="col-md-12 btn btn-primary btn-outline-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection