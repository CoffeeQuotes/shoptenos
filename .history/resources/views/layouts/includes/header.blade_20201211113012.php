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
#topbarsearch .input-field .prefix {
            width:0rem !important;
            }
        #topbarsearch nav ul li:hover, nav ul li.active {
                background-color: none !important;
            }
        .input-field .prefix ~ input, .input-field .prefix ~ textarea, .input-field .prefix ~ label, .input-field .prefix ~ .validate ~ label, .input-field .prefix ~ .autocomplete-content{
            margin-left: 1rem !important;
            }
/* .parallax-container {
      height: 90%;
      } */

      .z-depth-1,
nav,
.card-panel,
.card,
.toast,
.btn,
.btn-large,
.btn-small,
.btn-floating,
.dropdown-content,
.collapsible,
.sidenav {
    -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0), 0 3px 1px -2px rgba(0,0,0,0), 0 1px 5px 0 rgba(0,0,0,0);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0), 0 3px 1px -2px rgba(0,0,0,0), 0 1px 5px 0 rgba(0,0,0,0);

</style>
</head>
<body>
        @include('layouts.includes.partial.navbar')
