@extends('Backend.Master')
@section('Container')

<div class="row container-fluid"> <div class="contairer"> <h1><b>Product List:</b></h1>
  </div> <div class="col-md-10"></div> <div class="col-md-2">
  <a href="{{url('/Product/form')}}" class="font_style btn btn-success" type="button">Add Product</a>
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
      </tr>
    </thead>
    <tbody>
    
    @foreach($productdata as $item)

      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->photo}}</td>
        <td>{{$item->category_name}}</td>
        <td>{{$item->brand_name}}</td>
        <td>{{$item->product_name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->discription}}</td>
        <td>{{$item->status}}</td>
      </tr>

    @endforeach

    </tbody>
  </table>
</span>

{{$productdata->links()}}

<br /><br />
@endsection