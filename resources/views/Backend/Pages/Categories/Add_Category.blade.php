@extends('Backend.MasterPro')

@section('Container')

<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col-md-3"></div>
        <div class="col-md-6 pt-5 pb-5 bg-body-secondary border rounded">
            <h3 class="text-center text-success"><span class="text-warning">Add</span> Category</h3>
            <form>
                <div class="mb-3">
                    <label for="exampleInputCategory1" class="form-label">Category Name</label>
                    <input type="text" required class="form-control" id="#">
                    <div id="" class=""></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription1" class="form-label">Description</label>
                    <textarea name="text" id="" cols="68" rows="3" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-outline-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection