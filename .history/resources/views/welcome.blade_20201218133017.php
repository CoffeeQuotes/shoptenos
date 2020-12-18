@extends('layouts.app')
@section('page_title', 'Shop at Tneos')
@section('content')
<div id="index-banner" class="parallax-container" style="background-color: rgba(200,120,200,0.4);">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <div class="row" id="topbarsearch">
            <div class="input-field col s6 s12 red-text">
              <form action="{{ route('search') }}" method="POST">
                @csrf
                <input type="text" name="query" placeholder="Search Product" id="autocomplete-input" class="autocomplete grey-text" >
                <i class="blue-text material-icons prefix">search</i>
              </form>
            </div>
            </div>
        <div class="row center">
          <h2 class="header light  amber-text"  style=" text-shadow: 0 1px 0 rgba(255, 255, 255, 0.4); letter-spacing:2px; padding-top: 12px; padding-bottom: 12px;">Education Resources</h2>
        </div>
        <div class="row center">
          <a href="/products" id="download-button" class="z-depth-5 btn-large waves-effect waves-light" style="background-color: rgba(0,200,0,0.1);">Browse</a>
        </div>
        <br><br>

      </div>
    </div>
<div class="parallax"><img src="{{asset('img/hero.jpg')}}" alt="Teacher teaching in class room on white board"></div>
<svg class="hide-on-small-only" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,0L21.8,32C43.6,64,87,128,131,170.7C174.5,213,218,235,262,250.7C305.5,267,349,277,393,277.3C436.4,277,480,267,524,256C567.3,245,611,235,655,245.3C698.2,256,742,288,785,293.3C829.1,299,873,277,916,250.7C960,224,1004,192,1047,181.3C1090.9,171,1135,181,1178,176C1221.8,171,1265,149,1309,144C1352.7,139,1396,149,1418,154.7L1440,160L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,256L1440,0L1440,320L0,320Z"></path></svg> --}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,96L40,90.7C80,85,160,75,240,101.3C320,128,400,192,480,234.7C560,277,640,299,720,261.3C800,224,880,128,960,101.3C1040,75,1120,117,1200,128C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> --}}
{{-- <svg height="100%" width="100%" id="bg-svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><defs><linearGradient id="gradient"><stop offset="5%" stop-color="#0693e3ff"></stop><stop offset="95%" stop-color="#00d084ff"></stop></linearGradient></defs><path d="M 0,400 C 0,400 0,200 0,200 C 145.86666666666667,237.06666666666666 291.73333333333335,274.1333333333333 452,251 C 612.2666666666667,227.86666666666665 786.9333333333334,144.53333333333333 954,126 C 1121.0666666666666,107.46666666666667 1280.5333333333333,153.73333333333335 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150"></path></svg> --}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1a237e" fill-opacity="1" d="M0,128L48,138.7C96,149,192,171,288,197.3C384,224,480,256,576,250.7C672,245,768,203,864,160C960,117,1056,75,1152,69.3C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> --}}
</div>

  <div class="container" style="background-color: #273036;  width: 100%;
  max-width:initial;">
    <div class="section">
      <div class="row text-center">
        <div class="col s12">
          <h3 class="indigo-text" style="padding-top: 0; margin-top: 0; letter-spacing: 2.6px;">Advantages of Tneos Courses</h3>
        </div>
      </div>
      <!--   Icon Section   -->
      <div class="row">

        <div class="col s12 m4">
          <div class="icon-block">
            <img src="{{ asset('img/core/icon-2.svg') }}" class="response-img" style="max-height: 150px;"/>
            <h5 class="center teal-text">Personalized learning</h5>

            <p class="light text-white flow-text">Time tested approach & methods for preparation of any kind of examination.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <img src="{{ asset('img/core/icon-1.svg') }}" class="response-img"/ style="max-height: 150px;">
            {{-- <h2 class="center brown-text"><i class="material-icons">group</i></h2> --}}
            <h5 class="center teal-text">Trusted content</h5>

            <p class="light text-white flow-text">Clear your doubts, learn more, and understand better</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <img src="{{ asset('img/core/icon-3.svg') }}" class="response-img"/ style="max-height: 150px;">
            <h5 class="center teal-text">Empowering Teachers & Students</h5>

            <p class="light text-white flow-text">Best primary education that help develop a strong foundation.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('img/core/pattern.jpg') }}" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Featured Products</h4>
          <div class="row">
              @foreach ($products as $product)
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="{{ Voyager::image( $product->image_main ) }}" style="max-height: 220px;">
                  <span class="card-title indigo darken-5 p-0 m-0 px-1">{{ $product->name }}</span>
                </div>
                <div class="card-action">
                  <a  class="indigo-text" href="{{ url('add-to-cart/'.$product->id.'/buy') }}">Buy Now</a>
                </div>
              </div>
            </div>
                @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>


  {{-- <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/core/bg3.jpg')}}" alt="Unsplashed background img 3"></div>
  </div> --}}
@endsection
