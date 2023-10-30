@extends('Backend.Master')
@section('Container')

<div class="Container">
  <div class="row mt-3 mx-3 mb-4">

    <div class="col-md-12">
      <div style="margin-top: 50px; margin-left: 10px;" class="text-center">
        <h1 class="mt-3">Create Category</h1>
        <p class="white-text">You are 5 minutes away from compleating your Informantion!</p>
      </div>
    </div>

    <div class="col-md-4 justify-content-center">
    </div>

    <div class="col-md-4 justify-content-center">
      <div class="card card-custom pb-4">
        <div class="card-body mt-0 mx-5">

          <form action="{{url('/category/form/store')}}" method="post">
            @csrf
            <div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form9Example1">Category Name</label>
                  <input type="text" name="category_name" id="" class="form-control"/>
                </div>
              </div>
            </div>

            <div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form9Example1">Category Discription</label>
                  <textarea style="border: 1px solid lightgray; name="discription" id="" cols="49" rows="5"></textarea>
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