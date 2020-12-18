@extends('layouts.app')
@section('page_title', 'Shop at Tneos')
@section('content')
<div id="index-banner" class="parallax-container">
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
          <h5 class="header col s12 light" style="letter-spacing:2px;">Education Resources</h5>
        </div>
        <div class="row center">
          <a href="/products" id="download-button" class="btn-large waves-effect waves-light" style="background-color: rgba(255,255,255,0.1);">Browse</a>
        </div>
        <br><br>

      </div>
    </div>
<div class="parallax"><img src="{{asset('img/hero.jpg')}}" alt="Teacher teaching in class room on white board"></div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,96L40,90.7C80,85,160,75,240,101.3C320,128,400,192,480,234.7C560,277,640,299,720,261.3C800,224,880,128,960,101.3C1040,75,1120,117,1200,128C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
{{-- <svg height="100%" width="100%" id="bg-svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><defs><linearGradient id="gradient"><stop offset="5%" stop-color="#0693e3ff"></stop><stop offset="95%" stop-color="#00d084ff"></stop></linearGradient></defs><path d="M 0,400 C 0,400 0,200 0,200 C 145.86666666666667,237.06666666666666 291.73333333333335,274.1333333333333 452,251 C 612.2666666666667,227.86666666666665 786.9333333333334,144.53333333333333 954,126 C 1121.0666666666666,107.46666666666667 1280.5333333333333,153.73333333333335 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150"></path></svg> --}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1a237e" fill-opacity="1" d="M0,128L48,138.7C96,149,192,171,288,197.3C384,224,480,256,576,250.7C672,245,768,203,864,160C960,117,1056,75,1152,69.3C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> --}}
</div>

  <div class="container">
    <div class="section">

      <div class="row text-center">
        <div class="col s12 mt-5 pt-5">
          <h3>Advantages of Tneos Courses</h3>
        </div>
      </div>
      <!--   Icon Section   -->
      <div class="row">

        <div class="col s12 m4">
          <div class="icon-block">
            <img src="{{ asset('img/core/icon-2.svg') }}" class="response-img" style="max-height: 150px;"/>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <img src="{{ asset('img/core/icon-1.svg') }}" class="response-img"/ style="max-height: 150px;">
            {{-- <h2 class="center brown-text"><i class="material-icons">group</i></h2> --}}
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <img src="{{ asset('img/core/icon-3.svg') }}" class="response-img"/ style="max-height: 150px;">
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
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
    <div class="parallax"><img src="{{ asset('img/core/bg2.jpg') }}" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
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
    <div class="parallax"><img src="{{asset('img/core/bg3.jpg')}}" alt="Unsplashed background img 3"></div>
  </div>
@endsection
