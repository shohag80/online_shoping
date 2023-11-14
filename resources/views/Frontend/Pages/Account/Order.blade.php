


@extends('Frontend.Master')

@auth
<!-- order Section -->
@section('order')
@include('Frontend.Partials.Order')
@endsection

@endauth

@guest
@section('login')
@include('Frontend.Partials.Login')
@endsection
@endguest