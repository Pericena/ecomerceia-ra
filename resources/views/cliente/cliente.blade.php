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
    <title>{{ config('app.name', 'Ecomerce') }}</title>
    <!-- Fonts -->
    <!-- Styles -->
    <!--  Links de template -->
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" />
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/bootstrap.min.css') }}" />
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/slick.css') }}" />
    <!-- nouislider -->

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style-prefix.css') }}">
  
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <!-- HEADER -->
  <header>
    <div class="header-top">
      <div class="container">
        <ul class="header-social-container">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
        </ul>
        <div class="header-alert-news">
          <p>
            <b>Shipping</b>
            Ecomerce
          </p>
        </div>
        <div class="header-top-actions">
          @guest
          @if (Route::has('login'))
          <a class="" href="{{ route('login') }}">Ingresar</a>
          @endif
          @if (Route::has('register'))
          <a class="" href="{{ route('register') }}">Registrarse</a>
          @endif
          @else
          <ion-icon name="person-outline"></ion-icon>
          <a id="navbarDropdown" class="" href="{{ route('perfil.edit', auth()->user()->id) }}">
            {{ Auth::user()->email }}
          </a>
          <a class="dropdown-item" href="/cierreSesion">
            Cerrar Sesión <i class="fa fa-arrow-right"></i>
          </a>
          @endguest
        </div>
      </div>
    </div>
    <div class="header-main">
      <div class="container">
        <a href="/home" class="header-logo">
          <img src="{{ asset('img/Logo.png') }}" alt="logo" width="120" height="36">
        </a>
        <div class="header-search-container">
          <input type="search" name="search" class="search-field" placeholder="Ingrese el nombre del producto...">
          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </div>
        <div class="header-user-actions">
          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>
          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>
          <div class="col-md-3 clearfix">
            <div class="header-ctn">
              <div class="dropdown">
                <?php $c = 0; ?>
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
                    <?php $c++; ?>
                    <div class="product-widget">
                      <div class="product-img">
                        <img src="{{ asset('public/img/' . $producto->imagen) }}" alt="">
                      </div>
                      <div class="product-body">
                        <h3 class="product-name"><a href="#">{{ $producto->name }}</a></h3>
                        <h4 class="product-price">
                          <span class="qty">{{ $detalleCarrito->cantidad }}x</span>Bs {{ $detalleCarrito->precio }}
                        </h4>
                      </div>
                      <button class="delete" type="submit" form="delete_{{ $detalleCarrito->id }}" onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                        <i class="fa fa-close"></i>
                      </button>
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
                    <small>{{ $c }} Artículo(s) seleccionado(s)</small>
                    <h5>SUBTOTAL: Bs {{ $carrito->total }}</h5>
                  </div>
                  <div class="cart-btns">
                    <a href="{{ route('detalleCarrito.index') }}">Ver carrito</a>
                    @if ($c == 0)
                    <a href="#">Sin productos <i class="fa fa-arrow-circle-right"></i></a>
                    @else
                    <a href="{{ route('pagos.index') }}">Verificar <i class="fa fa-arrow-circle-right"></i></a>
                    @endif
                  </div>
                </div>
                @endguest
                <button class="action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <ion-icon name="bag-handle-outline"></ion-icon>
                  <span class="count">{{ $c }}</span>
                </button>
              </div>
              <div class="menu-toggle">
                <a href="#">
                  <i class="fa fa-bars"></i>
                  <span>Menú</span>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <nav id="navigation" class="desktop-navigation-menu">
      <div class="container">
        <ul class="desktop-menu-category-list">
          <li class="menu-category {{ 'home' == Request::is('home*') ? 'active' : '' }}">
            <a href="/home">Home</a>
          </li>
          <li class="menu-category {{ 'cliente/catalogo' == Request::is('cliente/catalogo*') ? 'active' : '' }}">
            <a href="{{ route('catalogo.index') }}">Catálogo</a>
          </li>
          <li class="menu-category {{ 'cliente/categoriaShow' == Request::is('cliente/categoriaShow*') ? 'active' : '' }}">
            <a href="{{ route('categoriaShow.index') }}">Categorías</a>
          </li>
          @auth
          <li class="menu-category {{ 'cliente/pedidosCliente' == Request::is('cliente/pedidosCliente*') ? 'active' : '' }}">
            <a href="{{ route('pedidosCliente.index') }}">Pedidos</a>
          </li>
          <li class="menu-category {{ 'cliente/AddressClient' == Request::is('cliente/AddressClient*') ? 'active' : '' }}">
            <a href="{{ url('/cliente/AddressClient') }}">Direcciones</a>
          </li>
          @endauth
        </ul>
      </div>
    </nav>

    <div class="mobile-bottom-navigation">
      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>
      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>
        <span class="count">0</span>
      </button>
      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>
      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>
        <span class="count">0</span>
      </button>
      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>
    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>
      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>
        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>
      <ul class="mobile-menu-category-list">
        <li class="menu-category {{ 'home' == Request::is('home*') ? 'active' : '' }}">
          <a href="/home">Home</a>
        </li>
        <li class="menu-category {{ 'cliente/catalogo' == Request::is('cliente/catalogo*') ? 'active' : '' }}">
          <a href="{{ route('catalogo.index') }}">Catálogo</a>
        </li>
        <li class="menu-category {{ 'cliente/categoriaShow' == Request::is('cliente/categoriaShow*') ? 'active' : '' }}">
          <a href="{{ route('categoriaShow.index') }}">Categorías</a>
        </li>
        @auth
        <li class="menu-category {{ 'cliente/pedidosCliente' == Request::is('cliente/pedidosCliente*') ? 'active' : '' }}">
          <a href="{{ route('pedidosCliente.index') }}">Pedidos</a>
        </li>
        <li class="menu-category {{ 'cliente/AddressClient' == Request::is('cliente/AddressClient*') ? 'active' : '' }}">
          <a href="{{ url('/cliente/AddressClient') }}">Direcciones</a>
        </li>
        @endauth
      </ul>
      <div class="menu-bottom">
        <ul class="menu-category-list">
          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>
            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="menu-social-container">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>


    <!-- /NAVIGATION -->
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

</html>
