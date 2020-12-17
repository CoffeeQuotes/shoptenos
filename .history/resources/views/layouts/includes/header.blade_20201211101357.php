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
      <style>
          .parallax-container {
  min-height: 380px;
  line-height: 0;
  height: auto;
  color: rgba(255,255,255,.9);
}
  .parallax-container .section {
    width: 100%;
  }

@media only screen and (max-width : 992px) {
  .parallax-container .section {
    position: absolute;
    top: 40%;
  }
  #index-banner .section {
    top: 10%;
  }
}

@media only screen and (max-width : 600px) {
  #index-banner .section {
    top: 0;
  }
}

.icon-block {
  padding: 0 15px;
}
.icon-block .material-icons {
  font-size: inherit;
}

footer.page-footer {
  margin: 0;
}
.parallax-container {
      height: 90%;
      }

</style>
</head>
<body>
        @include('layouts.includes.partial.navbar')
