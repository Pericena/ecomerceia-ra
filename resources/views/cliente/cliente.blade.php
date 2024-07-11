<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>eCommerce</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <!--  Links de template -->

  <link rel="shortcut icon" href="https://9ec4-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/img/Logo.png" />


  <link rel="canonical" href="https://demo-basic.adminkit.io/" />
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/bootstrap.min.css') }}" />

  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/slick.css') }}" />
  <link type="text/css" rel="stylesheet" href="https://9ec4-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/cliente/css/slick-theme.css" />


  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/nouislider.min.css') }}" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="{{ asset('cliente/css/font-awesome.min.css') }}">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="https://9ec4-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/cliente/css/style.css" />



  <link type="text/css" rel="stylesheet" href="https://9ec4-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/assets/css/style-prefix.css">


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</head>

<body>

  <!-- **************************************************************************************************************************************************************    -->

  <!-- HEADER -->
  <header>

    <div id="top-header">
      <div class="container">
        <ul class="header-links pull-right">

          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @endif
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('perfil.edit', auth()->user()->id) }}">
              {{ Auth::user()->email }} <i class="fa fa-user-o"></i>
              <a class="dropdown-item" href="/cierreSesion">
                {{ __('Logout') }} <i class="fa fa-arrow-right"></i>
          </li>
          @endguest
        </ul>
      </div>
    </div>

    <div id="header">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- LOGO -->
          <div class="col-md-3">
            <div class="header-logo">
              <a href="/home" class="logo">
                <img src="{{ asset('img/Logo.png') }}" width=190px alt="logo">
              </a>
            </div>
          </div>
          <!-- /LOGO -->
          <!-- SEARCH BAR -->
          <div class="col-md-6">
            <div class="header-search">
              <form>
                <select class="input-select">
                  <option value="0">All Categories</option>
                  <option value="1">Category 01</option>
                  <option value="1">Category 02</option>
                </select>
                <input class="input" placeholder="Search here">
                <button class="search-btn">Search</button>
              </form>
            </div>
          </div>
          <!-- /SEARCH BAR -->

          <!-- ACCOUNT -->
          <div class="col-md-3 clearfix">
            <div class="header-ctn">

              <!-- Cart -->
              <div class="dropdown">
                <?php
                $c = 0;
                ?>
                @guest
                <div class="cart-dropdown">
                  <div class="cart-list">
                    <h4>Carrito Vacío</h4>
                  </div>
                </div>
                @else
                <div class="cart-dropdown">
                  <div class="cart-list">
                    @foreach ($detallesCarrito as $detalleCarrito)
                    @if ($detalleCarrito->idCarrito == $carrito->id)
                    @foreach ($productos as $producto)
                    @if ($detalleCarrito->idProducto == $producto->id)
                    <?php
                    $c = $c + 1;
                    ?>
                    <div class="product-widget">
                      <div class="product-img">
                        <img src="{{ asset('public/img/' . $producto->imagen) }}" alt="">
                      </div>
                      <div class="product-body">
                        <h3 class="product-name"><a href="#">
                            {{ $producto->name }}</a></h3>
                        <h4 class="product-price"><span class="qty">{{ $detalleCarrito->cantidad }}x</span>Bs
                          {{ $detalleCarrito->precio }}
                        </h4>
                      </div>
                      <button class="delete" type="submit" form="delete_{{ $detalleCarrito->id }}" onclick="return confirm('¿Estás seguro de eliminar el registro?')"><i class="fa fa-close"></i></button>
                      <form action="{{ route('detalleCarrito.destroy', $detalleCarrito->id) }}" id="delete_{{ $detalleCarrito->id }}" method="POST" enctype="multipart/form-data" hidden>
                        @csrf
                        @method('DELETE')
                      </form>
                    </div>
                    @endif
                    @endforeach
                    @endif
                    @endforeach
                    @if ($c == 0)
                    <h4>Carrito Vacío</h4>
                    @endif
                  </div>
                  <div class="cart-summary">
                    <small>{{ $c }} Item(s) selected</small>
                    <h5>SUBTOTAL: Bs {{ $carrito->total }}</h5>
                  </div>
                  <div class="cart-btns">
                    <a href="{{ route('detalleCarrito.index') }}">View Cart</a>
                    @if ($c == 0)
                    <a href="#">Sin productos <i class="fa fa-arrow-circle-right"></i></a>
                    @else
                    <a href="{{ route('pagos.index') }}">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                    @endif

                  </div>
                </div>
                @endguest
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <i class="fa fa-shopping-cart"></i>
                  <span>Your Cart</span>
                  <div class="qty">{{ $c }}</div>
                </a>
              </div>
              <!-- /Cart -->

              <!-- Menu Toogle -->
              <div class="menu-toggle">
                <a href="#">
                  <i class="fa fa-bars"></i>
                  <span>Menu</span>
                </a>
              </div>
              <!-- /Menu Toogle -->
            </div>
          </div>
          <!-- /ACCOUNT -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>

  </header>
  <!-- /HEADER -->

  <!-- NAVIGATION -->
  <nav id="navigation">
    <!-- container -->
    <div class="container">
      <!-- responsive-nav -->
      <div id="responsive-nav">
        <!-- NAV -->
        <ul class="main-nav nav navbar-nav">
          <li class="{{ 'home' == Request::is('home*') ? 'active' : '' }}"><a href="/home">Home</a></li>
          <li class="{{ 'cliente/catalogo' == Request::is('cliente/catalogo*') ? 'active' : '' }}"><a href="{{ route('catalogo.index') }}">Catálogo</a></li>
          <li class="{{ 'cliente/categoriaShow' == Request::is('cliente/categoriaShow*') ? 'active' : '' }}">
            <a href="{{ route('categoriaShow.index') }}">Categorías</a>
          </li>
          @auth
          <li class="{{ 'cliente/pedidosCliente' == Request::is('cliente/pedidosCliente*') ? 'active' : '' }}">
            <a href="{{ route('pedidosCliente.index') }}">Pedidos</a>
          </li>
          <li class="{{ 'cliente/AddressClient' == Request::is('cliente/AddressClient*') ? 'active' : '' }}">
            <a href="{{ url('/cliente/AddressClient') }}">Direcciones</a>
          </li>
          @endAuth
        </ul>
        <!-- /NAV -->
      </div>
      <!-- /responsive-nav -->
    </div>
    <!-- /container -->
  </nav>
  <!-- /NAVIGATION -->
  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div id="store" class="col-md-12">
          @include('layouts.mensajes')
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  <!--*************************************************************************************************************************************** -->

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


  <!-- /FOOTER -->


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
