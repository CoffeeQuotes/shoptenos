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