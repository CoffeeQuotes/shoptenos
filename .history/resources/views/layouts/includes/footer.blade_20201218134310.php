<footer class="page-footer grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Featured Products</h5>
          <p class="grey-text text-lighten-4">Checkout our featured products also</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Quick Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="https://tneos.in/page/who-we-are">About Tneos</a></li>
            <li><a class="grey-text text-lighten-3" href="/refund">Cancellation & Refund Policy</a></li>
            <li><a class="grey-text text-lighten-3" href="https://tneos.in/privacypolicy">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2021 Tneos Eduloution Ltd.
      </div>
    </div>
  </footer>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery
  $(document).ready(function(){
  $('.parallax').parallax();
  });

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  // Or with jQuery
  $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true
  });

  $(document).ready(function(){
   $('.tabs').tabs();
  });

  $(document).ready(function(){
   $('.materialboxed').materialbox();
 });

 $(document).ready(function(){
    $('select').formSelect();
  });
   $('.dropdown-trigger').dropdown({ hover: true, constrainWidth: false });
  </script>
</body>
</html>
