@extends('Backend.Master')

@section('Container')

<div class="container">
    <div class="row pt-3 pb-3">
        <div class="col-md-3"></div>
        <div class="col-md-6 pb-4 bg-body-secondary border rounded">
            <div class="row bg-success pt-5 pb-2 mb-2 rounded">
                <h3 class="text-center text-white"><span class="text-warning">Add</span> Brand</h3>
            </div>
            <form action="{{route('brand_store')}}" method="post" enctype="multipart/form-data" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputBrand" class="form-label">Brand Name</label>
                    <input type="text" required name="name" value="{{old('name')}}" class="form-control" id="exampleInputBrand">
                    @error('name')<p class="text-danger">{{$message}}</p>@enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhoto" class="form-label">Brand Logo</label>
                    <input type="file" name="photo" class="form-control" id="exampleInputPhoto">
                    @error('photo')<p class="text-danger">{{$message}}</p>@enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription" class="form-label">Description</label>
                    <textarea name="description" id="exampleInputDescription" cols="68" rows="3" class="form-control">{{old('description')}}</textarea>
                    @error('description')<p class="text-danger">{{$message}}</p>@enderror
                </div>
                <button type="submit" class="col-md-12 btn btn-primary btn-outline-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection