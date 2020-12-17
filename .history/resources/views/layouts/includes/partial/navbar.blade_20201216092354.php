<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper  indigo darken-4">
      <a href="/" class="brand-logo p-2"><img src="{{ url('/') }}/storage/{{setting('site.logo')}}" class="img-fluid" style="height: 32px" alt=""></a>
      <a href="/" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
        <li><a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Cart <span class="amber lighten-2 black-text p-1">{{ count((array)session('cart')) }} Items</span></a></li>
      </ul>
      <ul id='dropdown1' class='dropdown-content'>
        <li><a href="#!"><i class="large material-icons">add_shopping_cart</i>{{ count((array)session('cart')) }}</a></li>
        <?php $total = 0 ?>
          @foreach((array) session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['quantity'] ?>
          @endforeach
        <li><a href="#!">Total: <span class="indigo-text">₹ {{ $total }}</span></a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="{{ url('cart') }}" class="indigo darken-2 white-text">View</a></li>
        <li>@if(session('cart'))
          @foreach(session('cart') as $id => $details)
            <div class="row mt-1">
                <div class="col s4 m4">
                    <img src="{{ Voyager::image($details['image']) }}"  class="responsive-img" width="200px"/>
                </div>
                <div class="col s8 m8">
                    <p>{{ $details['name'] }}</p>
                    <span class="price grey-text"> ₹{{ $details['price'] }}</span> <span class="count grey-text"> Quantity - {{ $details['quantity'] }}</span>
                </div>
             </div>
          @endforeach
        @endif
      </li>
      </ul>
    </div>
  </nav>
</div>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="/products">Products</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
    <li><a class='dropdown-trigger btn' href='#' data-target='dropdown2'><i class="large material-icons">add_shopping_cart</i></a></li>
  </ul>
  <ul id='dropdown2' class='dropdown-content'>
    <li><a href="#!">Item: {{ count((array) session('cart')) }}</a></li>
    <?php $total = 0 ?>
      @foreach((array) session('cart') as $id => $details)
        <?php $total += $details['price'] * $details['quantity'] ?>
      @endforeach
    <li><a href="#!">Total: <span class="indigo-text">₹ {{ $total }}</span></a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="{{ url('cart') }}" class="indigo darken-2 white-text">View</a></li>
    <li>@if(session('cart'))
      @foreach(session('cart') as $id => $details)

        <div class="row mt-1">
            <div class="col s4 m4">
                <img src="{{ Voyager::image($details['image']) }}"  class="responsive-img" width="200px"/>
            </div>
            <div class="col s8 m8">
                <p>{{ $details['name'] }}</p>
                <span class="price grey-text"> ₹{{ $details['price'] }}</span> <span class="count grey-text"> Quantity - {{ $details['quantity'] }}</span>
            </div>
         </div>

      @endforeach
    @endif
  </li>
  </ul>
