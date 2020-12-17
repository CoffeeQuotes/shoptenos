@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <h2>Products</h2>
    <div id="subject" class="input-field col s12 m4">
        <select onchange="changeQuery(this, 'subject')">
          <option value="" disabled selected>Choose your Subject</option>
              <option value="English">English</option>
              <option value="Mathematics">Mathematics</option>
              <option value="Science">Science</option>
              <option value="Social Science">Social Science</option>
              <option value="Physics">Physics</option>
              <option value="Chemistry">Chemistry</option>
              <option value="Biology">Biology</option>
              <option value="Computer Science">Computer Science</option>
        </select>
        <label>Subject</label>
    </div>
    <div class="input-field col s12 m4">
        <select onchange="changeQuery(this, 'board')">
          <option value="" disabled selected>Choose your Board</option>
              <option value="Bihar">Bihar Board</option>
              <option value="UP">Uttarpradesh Board</option>
              <option value="MP">Madhya Pradesh</option>
              <option value="Rajsthan">Rajsthan Board</option>
              <option value="Jharkhand">Jharkhand Board</option>
              <option value="Haryana">Haryana Board</option>
              <option value="CBSE">CBSE</option>
              <option value="Odisha">Odisha Board</option>
        </select>
        <label>Board</label>
    </div>
    <div class="input-field col s12 m4">
        <select onchange="changeQuery(this, 'class')">
          <option value="" disabled selected>Choose your Class</option>
              <option value="6">Class 6th</option>
              <option value="7">Class 7th</option>
              <option value="8">Class 8th</option>
              <option value="9">Class 9th</option>
              <option value="10">Class 10th</option>
              <option value="11">Class 11th</option>
              <option value="12">Class 12th</option>
        </select>
        <label>Class</label>
    </div>
    <a href="/products" class="waves-effect waves-indigo btn-flat">Clear Filters</a>
  </div>
  <div class="row">
      @foreach($products as $key => $product)
        <div class="col s12 m4">
              <div class="card small">
                <div class="card-image">
                  <a href="{{ route('products.show', $product->slug) }}">
                    <img src="{{ Voyager::image( $product->image_main ) }}">
                    <span class="card-title indigo darken-1" style="padding: 0 10px 0 10px; ">{{$product->name}}</span>
                  </a>  
                </div>
                <div class="card-content blue-grey-text">
                  <h6><b> ₹ {{ $product->price }}.00</b></h6>
                </div>

                <div class="card-action">
                  <a href="{{ url('add-to-cart/'.$product->id) }}" class="waves-effect waves-light btn-small  blue darken-1 white-text"><i class="material-icons left">add_shopping_cart</i>Add to Cart</a>
                </div>
              </div>
        </div>
      @endforeach
  </div>
  <script type="text/javascript">
  function changeQuery(selectSubject, param) {
    var value = selectSubject.value;
    _url = location.href;
    _url += (_url.split('?')[1] ? '&':'?') + param +"=" + value;
    window.location = _url;
  }
  </script>
  </div>







@endsection
