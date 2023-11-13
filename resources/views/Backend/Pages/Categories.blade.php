@extends('Backend.Master')
@section('Container')

<div class="row container-fluid"> <div class="contairer"> <h1><b>Category List:</b></h1>
  </div> <div class="col-md-10"></div> <div class="col-md-2">
  <a href="{{route('Add_Category')}}" class="font_style btn btn-success" type="button">Add Category</a>
</div>
</div>
<br /><br />

<div class="border border-warning">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Name</th>
        <th scope="col">Discription</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($Categories as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->category_name}}</td>
      <td>{{$item->description}}</td>
      <td>
        <a href="#" class="btn btn-success">{{$item->action}}</a>
    </td>
    </tr>
    @endforeach

    </tbody>
  </table>
  {{$Categories->links()}}
</div>

<br /><br />
@endsection