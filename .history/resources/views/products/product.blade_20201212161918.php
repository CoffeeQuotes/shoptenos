@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row py-4">
      <div class="col s12 m6">
        <div class="row">
          <div id="main" class="col s12" style="height: 380px">
              <img class="responsive-img materialboxed" src="{{ Voyager::image( $product->image_main ) }}" >
          </div>
          <div id="primary" class="col s12" style="height: 380px">
              <img class="responsive-img materialboxed" src="{{ Voyager::image( $product->image_primary ) }}">
          </div>
          <div id="secondary" class="col s12" style="height: 380px">
              <img class="responsive-img materialboxed" src="{{ Voyager::image( $product->image_secondary ) }}">
          </div>
          <ul class="tabs py-5 z-depth-1">
            <li class="tab col"><a class="active" href="#main"><img class="responsive-img" src="{{ Voyager::image( $product->image_main ) }}" style="max-height: 50px;"/></a></li>
            <li class="tab col"><a href="#primary"><img class="responsive-img" src="{{ Voyager::image( $product->image_primary ) }}" style="max-height: 50px;"></a></li>
            <li class="tab col"><a href="#secondary"><img class="responsive-img" src="{{ Voyager::image( $product->image_secondary ) }}" style="max-height: 50px;"></a></li>
          </ul>
      </div>
      </div>
      <div class="col s12 m6">
        <h2 class="indigo-text">{{ ucfirst($product->name) }}</h2>
        <h3 class="grey-text">₹ {{ $product->price }}</h3>
      </div>
    </div>

    {{ $product->subject }}
    {{ $product->class }}
    {{ $product->board }}
  </div>



@endsection
