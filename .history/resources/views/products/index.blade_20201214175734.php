@extends('layouts.app')
@section('content')

@foreach($products as $product)
 <input
@endforeach

@foreach($products as $key => $product)
        {{$product->name}}
        {!! $product->description !!}
@endforeach


@endsection
