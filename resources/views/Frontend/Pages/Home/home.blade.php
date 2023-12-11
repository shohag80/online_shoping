@extends('Frontend.Master')

<!-- Slider -->
@section('slider')

@include('Frontend.Partials.Slider')

@endsection

@section('category')

@include('Frontend.Pages.Category.list')

@endsection

@section('product')

@include('Frontend.Pages.Product.list')

@endsection



