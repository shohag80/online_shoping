@extends('Backend.Master')
@section('Container')

<div class="Container">
  <div class="row mt-3 mx-3 mb-4">

    <div class="col-md-12">
      <div style="margin-top: 50px; margin-left: 10px;" class="text-center">
        <h1 class="mt-3"><b>Add Product</b></h1>
        <p class="white-text">You are 5 minutes away from compleating your Informantion!</p>
      </div>
    </div>

    <div class="col-md-4 justify-content-center">
    </div>

    <div class="col-md-4 justify-content-center">
      <div class="card card-custom pb-4">
        <div class="card-body mt-0 mx-5">

          <form action="{{route('Product_Store')}}" method="post">
            @csrf

            @if( $errors->any())

            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)

                  <li>{{$error}}</li> 

                @endforeach
              </ul>
            </div>

            @endif

            <div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form9Example1">Category Name</label><br />

                  <select name="category_id" style="height: 32px; width: 370px; border: 1px solid lightgray;">
                    <option>Select Category</option>
                    @foreach($category as $item)
                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                    @endforeach
                  </select>

                  <!-- <input type="text" name="category_name" id="" class="form-control"/> -->
                </div>
              </div>
            </div>
            <div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form9Example1">Brand Name</label><br />

                  <select name="brand_id" style="height: 32px; width: 370px; border: 1px solid lightgray;" aria-label="Default select example">
                    <option>Select Brand</option>
                    @foreach($brand as $item)
                    <option value="{{$item->id}}">{{$item->brand_name}}</option>
                    @endforeach
                  </select>

                  <!-- <input type="text" name="brand_name" id="" class="form-control" /> -->
                </div>
              </div>
            </div>
            <div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form9Example1">Product Name</label>
                  <input type="text" name="product_name" id="" class="form-control" placeholder='Enter Product Name' />
                </div>
              </div>
            </div>
            <div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form9Example1">Product Price</label>
                  <input type="number" name="product_price" id="" class="form-control" placeholder='Enter Price Value (Taka)' />
                </div>
              </div>
            </div>
            <div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form9Example1">Product Image</label>
                  <input type="file" style="border: 1px white;" name="product_image" id="" class="form-control" />
                </div>
              </div>
            </div>

            <div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form9Example1">Category Discription</label>
                  <textarea name="discription" style="border: 1px solid lightgray;" id="" cols="49" rows="5"></textarea>
                </div>
              </div>
            </div>

            <br /><br />

            <div class="col-md-12">
              <div class="col-md-8">
                <a class="btn btn-info" href="{{url('/Category')}}" type="submit">Go back</a>
              </div>
              <div class="col-md-4">
                <button class="btn btn-info" type="submit">Submit</button>
              </div>
            </div>

            <br /><br /><br /><br />

          </form>

        </div>
      </div>
    </div>

    <div class="col-md-4 justify-content-center">
    </div>

  </div>
</div>

@endsection