@extends('Backend.Master')
@section('Container')

<div class="row container-fluid">
  <div class="contairer">
  <h1><b>Category List:</b></h1>
  </div>
  <div class="col-md-10"></div>
  <div class="col-md-2">
    <a href="{{url('/Category/form')}}" class="font_style btn btn-success" type="button">Add Category</a>
  </div>
</div>
<br/><br/>

<span class="border border-warning">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Discription</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</span>

<br/><br/>
@endsection