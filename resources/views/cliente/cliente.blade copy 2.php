<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eCommerce</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" />
  <link rel="canonical" href="https://demo-basic.adminkit.io/" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/bootstrap.min.css') }}" />
  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/slick.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/slick-theme.css') }}" />

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/nouislider.min.css') }}" />
  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="{{ asset('cliente/css/font-awesome.min.css') }}">
  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/style.css') }}" />







  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</head>

<body>




  <!-- container -->

  @include('layouts.mensajes')
  @yield('content')

  {{-- 
<div id="cookie-banner" class="cookie-banner">
  <p>Utilizamos cookies para asegurarnos de que obtengas la mejor experiencia en nuestro sitio web. Al continuar navegando, aceptas nuestro uso de cookies.
    <a href="https://supersoftware2.blogspot.com/2024/06/terminos-y-condiciones.html" target="_blank">Más información</a>.</p>
  <button id="accept-cookies" class="btn2">Aceptar</button>
</div> --}}



  <style>
  /* styles.css */

  .cookie-banner {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 14px;
    z-index: 1000;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  .cookie-banner p {
    margin: 0 0 10px 0;
  }

  .cookie-banner a {
    color: #ffc107;
    text-decoration: underline;
  }

  .btn2 {
    background-color: #ffc107;
    border: none;
    padding: 10px 20px;
    color: black;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
  }

  .btn2:hover {
    background-color: #e0a800;
  }
  </style>

  <footer>
    <div class="footer-category">
      <div class="container">
        <h2 class="footer-category-title">Directorio de marcas</h2>
        <div class="footer-category-box">
          <h3 class="category-box-title">Moda :</h3>
          <a href="#" class="footer-category-link">Camisetas</a>
          <a href="#" class="footer-category-link">Camisas</a>
          <a href="#" class="footer-category-link">Pantalones cortos y jeans</a>
          <a href="#" class="footer-category-link">Chaquetas</a>
          <a href="#" class="footer-category-link">Vestidos y faldas</a>
          <a href="#" class="footer-category-link">Ropa interior</a>
          <a href="#" class="footer-category-link">Calcetines</a> <!-- Esta línea se ha eliminado -->
        </div>
        <div class="footer-category-box">
          <h3 class="category-box-title">Joyas :</h3>
          <a href="#" class="footer-category-link">Collares</a>
          <a href="#" class="footer-category-link">Aretes</a>
          <a href="#" class="footer-category-link">Anillos de pareja</a>
          <a href="#" class="footer-category-link">Colgantes</a>
          <a href="#" class="footer-category-link">Cristales</a>
          <a href="#" class="footer-category-link">Pulseras</a>
          <a href="#" class="footer-category-link">Brazaletes</a>
          <a href="#" class="footer-category-link">Piercings de nariz</a>
          <a href="#" class="footer-category-link">Cadenas</a>
        </div>
      </div>
    </div>
    <div class="footer-nav">
      <div class="container">
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Categorías populares</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Moda</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Productos</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Descuentos</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Nuevos productos</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Mejores ventas</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contáctanos</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Mapa del sitio</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Nuestra empresa</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Entrega</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Aviso legal</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Términos y condiciones</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sobre nosotros
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Pago seguro</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Servicios</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Descuentos</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Nuevos productos</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Mejores ventas</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contáctanos</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Mapa del sitio</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Contacto</h2>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>
            <address class="content">
              419 State 414 Rte
              Beaver Dams, New York(NY), 14812, USA
            </address>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>
            <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Síguenos</h2>
          </li>
          <li>
            <ul class="social-link">
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <img src="./assets/images/payment.png" alt="Métodos de pago" class="payment-img">
        <p class="copyright">
          Derechos de autor &copy; <a href="#">Galil</a> todos los derechos reservados.
        </p>
      </div>
    </div>
  </footer>


  <script src="{{ asset('./assets/js/script.js') }}"></script>
  <!-- jQuery Plugins -->

  <script src="{{ asset('cliente/js/jquery.min.js') }}"></script>
  <script src="{{ asset('cliente/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('cliente/js/slick.min.js') }}"></script>
  <script src="{{ asset('cliente/js/nouislider.min.js') }}"></script>
  <script src="{{ asset('cliente/js/jquery.zoom.min.js') }}"></script>
  <script src="{{ asset('cliente/js/main.js') }}"></script>
  <script src="{{ asset('admin/static/js/app.js') }}"></script>






</body>
<script>
var botmanWidget = {
  title: "Ecomerce",
  aboutText: "Ecomerce",
  introMessage: "Hola!",
  placeholderText: "Escribe un mensaje",
  mainColor: "#CC0000",
  bubbleBackground: "#CC0000",
  aboutLink: '/home'
};
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  var cookieBanner = document.getElementById("cookie-banner");
  var acceptCookiesBtn = document.getElementById("accept-cookies");

  // Función para establecer una cookie
  function setCookie(name, value, days) {
    var expires = "";
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }

  // Función para obtener una cookie
  function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) === ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }

  // Verificar si la cookie de aceptación de cookies está establecida
  if (!getCookie("acceptCookies")) {
    cookieBanner.style.display = "flex";
  }

  // Manejar el clic en el botón de aceptación de cookies
  acceptCookiesBtn.addEventListener("click", function() {
    setCookie("acceptCookies", "true", 365);
    cookieBanner.style.display = "none";
  });
});
</script>

</html>