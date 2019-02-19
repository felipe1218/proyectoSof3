<!DOCTYPE html>
<html>
  <title>Las acacias</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ secure_asset('css/inicio.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ secure_asset('js/app.js') }}"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <body style="background-color: #FFF7F5;">

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
      <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
          <i class="fa fa-bars"></i>
        </a>
        <a href="/inicio" class="w3-bar-item btn btn-primary">Iniciar sesión</a>
      </div>
    </div>

      <!-- Navbar on small screens 
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
        <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
        <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
      </div>
    </div> -->

    <!-- First Parallax Image with Logo Text -->
    <div class="mt-5 pt-3">
      <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle" style="white-space:nowrap; z-index: 1000;">
          <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><a href="/turistas" class="btn">Módulo para turistas</a></span>
        </div>
        <div id="carouselExampleSlidesOnly" class="slide carrou" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block img" src="{{ asset('images/lasAcacias1.jpeg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img" src="{{ asset('images/lasAcacias2.jpeg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img" src="{{ asset('images/lasAcacias3.jpeg') }}" alt="Third slide">
            </div>
          </div>
        </div>
      </div>

      
      <!-- Container (About Section) -->
      <div class="w3-content pt-5" id="about">
        <h3 class="w3-center" style="font-family: Verdana,sans-serif !important;
    font-weight: 600 !important;">Las Acacias Coffee Farm</h3>
        <p class="w3-center"><em>Ven y conoce el maravilloso mundo del mejor café del mundo</em></p>
     <p>Las Acacias Coffee Farm es una rica y diferente experiencia en el mundo del café, aquí los visitantes podrán tener el mejor acercamiento con la cultura cafetera Colombiana a partir de las interacciones con una finca familiar tradicional; en Las Acacias, los visitantes pueden disfrutar de la espectacularidad del paisaje cultural cafetero, conocer cultivos diferentes al café, que hacen parte de la economía de una familia caficultora, además de disfrutar de un escenario único para los amantes del buen café, servido en el mejor entorno y adornado por el mejor paisaje para sus fotografías.</p>
  <p>No somos solo un tour cafetero, somos un espacio donde el viajero disfruta e interactúa con muchos elementos adicionales al café, con la disposición de un equipo dispuesto a hacer de esta una experiencia única e inolvidable.
  </p>
      </div>
    </div>
    <script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>
  </body>
</html>