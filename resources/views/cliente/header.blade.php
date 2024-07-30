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
         <br>
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
                         <span class="qty">{{ $detalleCarrito->cantidad }}x</span>Bs
                         {{ $detalleCarrito->precio }}
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
