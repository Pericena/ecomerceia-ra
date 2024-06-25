@extends('cliente.cliente')
@section('content')

<!-- SECTION -->
<div class="">
  <div class="container">
    <div class="row">
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
                @foreach ($productos as $producto)
                <div class="product">
                  <div class="product-img">
                    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
                    <model-viewer id="miModelViewer" alt="ropa" src="{{ asset('public/img/' . $producto->imagen) }}" ar ar-modes="webxr scene-viewer quick-look" seamless-poster shadow-intensity="1" camera-controls ar-button ar-placement="floor" progress-bar width="150px" height="150px">
                    </model-viewer>
                    <img src="{{ asset('public/img/' . $producto->imagen) }}" alt="">
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
                    <h4 class="product-price">Bs {{ $producto->precioUnitario - $producto->precioUnitario * $descuento }}
                      <del class="product-old-price">Bs {{ $producto->precioUnitario }}</del>
                    </h4>
                    @else
                    <h4 class="product-price">Bs {{ $producto->precioUnitario }}</h4>
                    @endif
                    <div class="product-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="product-btns">
                      <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                      <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                      <button class="quick-view">
                        <i class="fa fa-eye"></i><span class="tooltipp"><a href="{{ route('catalogo.show', $producto->id) }}" style="color: white">quick view</a></span>
                      </button>
                      <form action="{{ route('detalleCarrito.store') }}" method="POST" enctype="multipart/form-data" id="create{{ $loop->iteration }}">
                        @csrf
                        <input type="number" id="cantidad" name="cantidad" min="1" max="1000" value="1">
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
                    <button class="add-to-cart-btn" form="create{{ $loop->iteration }}"><i class="fa fa-shopping-cart"></i> add to cart</button>
                  </div>
                </div>
                <!-- /product -->
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


@extends('cliente.catalogo.blog')
@yield('content')

{{-- @extends('cliente.catalogo.testimonials') --}}

@extends('cliente.catalogo.oferta')
@yield('content')

@extends('cliente.catalogo.productolista')
@yield('content')

@extends('cliente.catalogo.categoria')
@yield('content')

@extends('cliente.catalogo.banner')
@yield('content')

@extends('cliente.header')
@yield('content')

@endsection
