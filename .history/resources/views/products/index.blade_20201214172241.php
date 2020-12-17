@extends('layouts.app')
@section('content')

@foreach($products as $product)
<label>
    <input type="checkbox" checked="checked" />
    <span>{{ $product->subject}}</span>
</label>
@endforeach

@foreach($products as $key => $product)
        {{$product->name}}
        {!! $product->description !!}
@endforeach


@endsection
