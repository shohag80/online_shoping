@extends('Backend.Master')
@section('Container')

<h1>
    <i><u>Brand List</u></i></h1> <a type="button" href="{{route('Add_Brand')}}" class="btn btn-success" >Add
        Brand</a><hr />

    <div>
        <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Sl No</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Discription</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($BrandData as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->brand_name}}</td>
                <td>{{$item->discription}}</td>
                <td>{{$item->action}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        {{$BrandData->links()}}
    </div>

    @endsection