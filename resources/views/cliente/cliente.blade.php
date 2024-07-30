<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eCommerce</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Ecomerce') }}</title>
  <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/bootstrap.min.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/slick.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/style.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style-prefix.css') }}">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <div class="section">
    <div class="container">
      <div class="row">
        <div id="store" class="col-md-12">
          @include('layouts.mensajes')
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
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
          <a href="#" class="footer-category-link">Calcetines</a>
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
        <p class="copyright">
          Derechos de autor &copy; <a href="#">Galil</a> todos los derechos reservados.
        </p>
      </div>
    </div>
  </footer>
  <!-- jQuery Plugins -->


  <script src="{{ asset('assets/js/script.js') }}"></script>
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
    title: "Ecomerce"
    , aboutText: "Ecomerce"
    , introMessage: "Hola!"
    , placeholderText: "Escribe un mensaje"
    , mainColor: "#CC0000"
    , bubbleBackground: "#CC0000"
    , aboutLink: '/home'
  };

</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</html>
