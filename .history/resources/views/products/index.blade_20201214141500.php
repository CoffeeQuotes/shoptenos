@extends('layouts.app')
@section('content')
@foreach($products as $key => $product)
        {{$product->name}}
        {! $product->description !}
        <button class="btn btn-lg">Add To Cart</button>
@endforeach
@endsection
