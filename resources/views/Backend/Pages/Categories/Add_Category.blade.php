@extends('Backend.MasterPro')

@section('Container')

<div class="container">
    <div class="row pt-3 pb-3">
        <div class="col-md-3"></div>
        <div class="col-md-6 pb-4 bg-body-secondary border rounded">
            <div class="row bg-success pt-5 pb-2 mb-2 rounded">
                <h3 class="text-center text-white"><span class="text-warning">Add</span> Category</h3>
            </div>
            <form action="#" method="post" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputCategory" class="form-label">Category Name</label>
                    <input type="text" required class="form-control" id="exampleInputCategory">
                    <div id="" class=""></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhoto" class="form-label">Category Image</label>
                    <input type="file" required class="form-control" id="exampleInputPhoto">
                    <div id="" class=""></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription" class="form-label">Description</label>
                    <textarea name="description" id="exampleInputDescription" cols="68" rows="3" class="form-control"></textarea>
                </div>
                <button type="submit" class="col-md-12 btn btn-primary btn-outline-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection