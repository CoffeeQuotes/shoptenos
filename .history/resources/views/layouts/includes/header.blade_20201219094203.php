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
      <meta property="og:image" content="@yield('page_image',"url('/')/storage/{{setting('site.logo')}}")" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <link type="text/css" rel="stylesheet" href="css/style.css">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </head>
<body>
        @include('layouts.includes.partial.navbar')
