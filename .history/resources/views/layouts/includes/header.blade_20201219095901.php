<!DOCTYPE html>
  <html>
    <head>
    <link href="{{asset('css/bootstrap-utilities.min.css')}}" rel="stylesheet"/>
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>@yield('page_title', setting('site.title') . " - " . setting('site.description'))</title>

      <meta property="og:title" content="@yield('page_title', setting('site.title') . " - " . setting('site.description'))" />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="{{Request::fullUrl()}}" />
      <meta property="og:image" content="{{ url('/') }}/storage/{{setting('site.logo')}}" />

      <meta name="twitter:card" content="" />
      <meta name="twitter:site" content="@tneosl" />
      <meta name="twitter:title" content="Online Shopping India - Shop Online for Branded Shoes, Clothing & Accessories in India | Myntra.com" />
  <meta name="twitter:description" content="Online Shopping Site for Fashion & Lifestyle in India. Buy Shoes, Clothing, Accessories and lifestyle products for women & men. Best Online Fashion Store * COD* Easy returns and exchanges*" />
  <meta name="twitter:image" content="https://constant.myntassets.com/www/data/portal/mlogo.png"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <link type="text/css" rel="stylesheet" href="css/style.css">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </head>
<body>
        @include('layouts.includes.partial.navbar')
