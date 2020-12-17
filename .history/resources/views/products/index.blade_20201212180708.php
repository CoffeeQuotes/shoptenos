@extends('layouts.app')
@section('content')
    @foreach($products as $key => $product)
        {{$product->name}}
    @endforeach
@endsection
