<footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Content</h5>
          <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2020 Copyright Text
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
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
