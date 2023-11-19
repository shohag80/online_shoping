@extends('Backend.Master')
@section('Container')

<div class="row container-fluid"> <div class="contairer"> <h1><b>Product List:</b></h1>
  </div> <div class="col-md-10"></div> <div class="col-md-2">
  <a href="{{route('Product_From')}}" class="font_style btn btn-success" type="button">Add Product</a>
</div>
</div>
<br /><br />

<span class="border border-warning">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Photo</th>
        <th scope="col">category</th>
        <th scope="col">Brand</th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col">Discription</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    
    @foreach($productdata as $item)

      <tr>
        <td>{{$item->id}}</td>
        <td>
          <img style="min-height: 40px; max-height: 41px; min-width:40px; max-width:41px;" src="{{url('uploads/',$item->photo)}}" alt="">
        </td>
        <td>{{$item->category->category_name}}</td>
        <td>{{$item->brand->brand_name}}</td>
        <td>{{$item->product_name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->discription}}</td>
        <td>{{$item->status}}</td>
        <td>
          <a type="button" href="{{route('Single_Product',$item->id)}}" class="btn btn-info rounded">view</a>
          <a type="button" href="{{route('Edit_Product',$item->id)}}" class="btn btn-success rounded">Update</a>
          <a type="button" href="{{route('Delete_Product',$item->id)}}" class="btn btn-danger rounded">Delete</a>
        </td>
      </tr>

    @endforeach

    </tbody>
  </table>
</span>

{{$productdata->links()}}

<br /><br />
@endsection