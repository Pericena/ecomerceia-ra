 <link type="text/css" rel="stylesheet" href="{{ ('cliente/css/style-prefix.css') }}">



<div class="product-container">
  <div class="container">
    <div class="sidebar  has-scrollbar" data-mobile-menu>
      <div class="sidebar-category">
        <div class="sidebar-top">
          <h2 class="sidebar-title">Menu</h2>
          <button class="sidebar-close-btn" data-mobile-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>
        <ul class="sidebar-menu-category-list">
          <li class="sidebar-menu-category">
            <button class="sidebar-accordion-menu" data-accordion-btn>
              <div class="menu-title-flex">
                  <p class="menu-title {{ 'home' == Request::is('home*') ? 'active' : '' }}">
                  <a href="/home">Home</a>
                </p>
              </div>
              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
              </div>
            </button>
          </li>
          <li class="sidebar-menu-category">
            <button class="sidebar-accordion-menu" data-accordion-btn>
              <div class="menu-title-flex">
                <p class="menu-category {{ 'cliente/catalogo' == Request::is('cliente/catalogo*') ? 'active' : '' }}">
                  <a href="{{ route('catalogo.index') }}">Catálogo</a>
                </p>
              </div>
              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
              </div>
            </button>
          </li>
          <li class="sidebar-menu-category">
            <button class="sidebar-accordion-menu" data-accordion-btn>
              <div class="menu-title-flex">
                <p {{ 'cliente/categoriaShow' == Request::is('cliente/categoriaShow*') ? 'active' : '' }}">
                  <a href="{{ route('categoriaShow.index') }}">Categorías</a>
                </p>
              </div>
              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
              </div>
            </button>
          </li>
          @auth
          <li class="sidebar-menu-category">
            <button class="sidebar-accordion-menu" data-accordion-btn>
              <div class="menu-title-flex">
                <p class="menu-title {{ 'cliente/pedidosCliente' == Request::is('cliente/pedidosCliente*') ? 'active' : '' }}">
                  <a href="{{ route('pedidosCliente.index') }}">Pedidos</a>
                </p>
              </div>
              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
              </div>
            </button>
          </li>
          <li class="sidebar-menu-category">
            <button class="sidebar-accordion-menu" data-accordion-btn>
              <div class="menu-title-flex">
                <p class="menu-title {{ 'cliente/AddressClient' == Request::is('cliente/AddressClient*') ? 'active' : '' }}">
                  <a href="{{ url('/cliente/AddressClient') }}">Direcciones</a>
                </p>
              </div>
              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
              </div>
            </button>
          </li>
          @endauth
        </ul>
      </div>
    </div>
    <div class="product-box">
      <div class="product-main">
        <div class="col-md-12">
          <div class="section-title">
            <h3 class="title">NUEVOS PRODUCTOS</h3>
            <div class="section-nav">
              <ul class="section-tab-nav tab-nav">
                <li class=""><a data-toggle="tab" href="#tab1">Polos</a></li>
                <li><a data-toggle="tab" href="#tab1">Clásico</a></li>
                <li><a data-toggle="tab" href="#tab1">Spandex</a></li>
                <li><a data-toggle="tab" href="#tab1">Accesorios</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="products-tabs">
              <div id="tab1" class="tab-pane active">
                <div class="products-slick" data-nav="#slick-nav-1">
                  <?php $a = 0; ?>
                  @foreach ($productos as $producto)
                  <?php $a = $a + 1; ?>
                  <div class="product">
                    <div class="product-img">
                      {{-- <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
                      </script>
                      <model-viewer id="miModelViewer" alt="ropa" src="{{ asset('public/img/' . $producto->modelo) }}" ar ar-modes="webxr scene-viewer quick-look" seamless-poster shadow-intensity="1" camera-controls ar ar-modes="webxr quick-look" ar-button ar-placement="floor" progress-bar width="150px" height="150px">
                      </model-viewer> --}}
                      <img class="card-banner" alt="" width="350" height="200" src="{{ asset('public/img/' . $producto->imagen) }}" alt="">
                      <div class="product-label">
                        @if ($producto->idpromocion != '')
                        @foreach ($promociones as $promocion)
                        @if ($producto->idpromocion == $promocion->id)
                        <span class="sale">-{{ $promocion->descuento }}%</span>
                        <?php $descuento = $promocion->descuento / 100; ?>
                        @endif
                        @endforeach
                        @endif
                        @if ($producto->stock == 0)
                        <span class="new">Sin Stock</span>
                        @endif
                      </div>
                    </div>
                    <div class="product-body">
                      @foreach ($categorias as $categoria)
                      @if ($categoria->id == $producto->idcategoria)
                      <p class="product-category">{{ $categoria->nombre }}</p>
                      @endif
                      @endforeach
                      <h3 class="product-name"><a href="#">{{ $producto->name }}</a></h3>
                      @if ($producto->idpromocion != '')
                      <h4 class="product-price">Bs
                        {{ $producto->precioUnitario - $producto->precioUnitario * $descuento }}
                        <del class="product-old-price">Bs
                          {{ $producto->precioUnitario }}</del>
                      </h4>
                      @else
                      <h4 class="product-price">Bs {{ $producto->precioUnitario }}
                      </h4>
                      @endif
                      <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="product-btns">
                        <button class="add-to-wishlist">
                          <i class="fa fa-heart-o"></i>
                          <span class="tooltipp">Favorito</span></button>
                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Compartir</span></button>
                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">
                            <a href="{{ route('catalogo.show', $producto->id) }}" style="color: white">
                              quick view</a> </span></button>
                        <form action="{{ route('detalleCarrito.store') }}" method="POST" enctype="multipart/form-data" id="create{{ $a }}">
                          @csrf
                          <div class="quantity-input">
                            <input type="number" id="cantidad" name="cantidad" min="1" max="1000" value="1">
                          </div>
                          @if ($producto->idpromocion != '')
                          <input type="hidden" name="precio" id="precio" value="{{ $producto->precioUnitario - $producto->precioUnitario * $descuento }}">
                          @else
                          <input type="hidden" name="precio" id="precio" value="{{ $producto->precioUnitario }}">
                          @endif
                          <input type="hidden" name="idProducto" id="idProducto" value="{{ $producto->id }}">
                          @auth
                          <input type="hidden" name="idCarrito" id="idCarrito" value="{{ $carrito->id }}">
                          @endauth
                        </form>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <button class="add-to-cart-btn" form="create{{ $a }}">
                        <i class="fa fa-shopping-cart"></i>
                        añadir
                      </button>
                    </div>
                  </div>
                  @endforeach
                </div>
                <div id="slick-nav-1" class="products-slick-nav"></div>
              </div>
            </div>
          </div>
        </div>


        
      </div>
    </div>
  </div>
</div>

