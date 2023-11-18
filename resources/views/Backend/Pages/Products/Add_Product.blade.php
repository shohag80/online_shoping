@extends('Backend.MasterPro')

@section('Container')

<div class="container">
    <div class="row pt-3 pb-3">
        <div class="col-md-3"></div>
        <div class="col-md-6 bg-body-secondary border rounded">
            <div class="row bg-success pt-5 pb-2 mb-2 rounded">
                <h3 class="text-center text-white"><span class="text-warning">Add</span> Product</h3>
            </div>
            <form action="#" method="post" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputCategory" class="form-label">Category Name</label>
                    <select name="category_name" class="form-control" id="exampleInputCategory">
                        <option>Select Category</option>
                        <option value=""></option>
                    </select>
                    <div id="" class=""></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputBrand" class="form-label">Brand Name</label>
                    <select name="brand_name" class="form-control" id="exampleInputCategory">
                        <option>Select Brand</option>
                        <option value=""></option>
                    </select>
                    <div id="" class=""></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputProduct" class="form-label">Product Name</label>
                    <input type="text" required class="form-control" id="exampleInputProduct" placeholder="Enter Product Name">
                    <div id="" class=""></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPrice" class="form-label">Product Price</label>
                    <input type="number" required class="form-control" id="exampleInputPrice" placeholder="Enter Product Price">
                    <div id="" class=""></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhoto" class="form-label">Product Image</label>
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