  <link type="text/css" rel="stylesheet" href="https://9ec4-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/cliente/css/style.css" />



  <link type="text/css" rel="stylesheet" href="https://9ec4-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/assets/css/style-prefix.css">



  @extends('cliente.cliente')
  @section('content')

  <div class="container my-4">
    <div class="row">
      <div class="col-12">
        <div class="products-tabs">
          <div id="tab1" class="tab-pane active">
            <div class="products-slick" data-nav="#slick-nav-1">
              @foreach ($productos as $producto)
              <div class="product card mb-4">
                <div class="product-img card-img-top">
                  <img src="{{ asset('public/img/' . $producto->imagen) }}" alt="" class="img-fluid"> --}}
                  <div class="product-label">
                    @if ($producto->idpromocion != '')
                    @foreach ($promociones as $promocion)
                    @if ($producto->idpromocion == $promocion->id)
                    <span class="badge badge-danger">-{{ $promocion->descuento }}%</span>
                    <?php $descuento = $promocion->descuento / 100; ?>
                    @endif
                    @endforeach
                    @endif
                    @if ($producto->stock == 0)
                    <span class="badge badge-warning">Sin Stock</span>
                    @endif
                  </div>
                </div>
                <div class="">
                  @foreach ($categorias as $categoria)
                  @if ($categoria->id == $producto->idcategoria)
                  <p class="product-category">{{ $categoria->nombre }}</p>
                  @endif
                  @endforeach
                  <h5 class="product-name card-title"><a href="#">{{ $producto->name }}</a></h5>
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
                  <div class="product-btns d-flex justify-content-around mt-3">
                    <button class="btn btn-outline-secondary add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                    <button class="btn btn-outline-secondary add-to-compare"><i class="fa fa-exchange"></i></button>
                    <button class="btn btn-outline-secondary quick-view">
                      <i class="fa fa-eye"></i>
                      <a href="{{ route('catalogo.show', $producto->id) }}" class="text-dark">quick view</a>
                    </button>
                  </div>
                  <form action="{{ route('detalleCarrito.store') }}" method="POST" enctype="multipart/form-data" id="create{{ $loop->iteration }}" class="mt-3">
                    @csrf
                    <div class="input-group">
                      <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" max="1000" value="1">
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
                <div class="card-footer">
                  <button class="btn btn-danger btn-block add-to-cart-btn" form="create{{ $loop->iteration }}"><i class="fa fa-shopping-cart"></i> add to cart</button>
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

  @extends('cliente.catalogo.blog')
  @yield('content')

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
