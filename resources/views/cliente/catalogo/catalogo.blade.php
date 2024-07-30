@extends('cliente.cliente')
@extends('cliente.header')
@section('content')
    <div id="breadcrumb" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Catálogo</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="{{ url('/home') }}">Inicio</a></li>
                        <li class="active">Catálogo</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- PRODUCTOS DE LA TIENDA -->
    <div class="row">
        @php
            $contador = 0;
            $contador_fila = 0;
        @endphp
        @foreach ($productos as $producto)
            @php
                $contador++;
                $contador_fila++;
            @endphp
            <!-- Producto -->
            <div class="col-md-4 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <!-- Imagen del producto -->
                        <ul class="grid-list">
                            <li>
                                <div class="product-card">
                                    <div class="card-banner img-holder"
                                        style="--width: 160; --height: 260;background-color: rgb(255, 255, 255);">
                                        <img src="{{ asset('public/img/' . $producto->imagen) }}"
                                            alt="{{ $producto->name }}" width="250" height="250">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Etiquetas del producto -->
                        <div class="product-label">
                            @if ($producto->idpromocion != '')
                                @foreach ($promociones as $promocion)
                                    @if ($producto->idpromocion == $promocion->id)
                                        <span class="sale">-{{ $promocion->descuento }}%</span>
                                        @php $descuento = $promocion->descuento / 100; @endphp
                                    @endif
                                @endforeach
                            @endif
                            @if ($producto->stock == 0)
                                <span class="new">Sin Stock.</span>
                            @endif
                        </div>
                    </div>
                    <div class="product-body">
                        <!-- Categoría del producto -->
                        @foreach ($categorias as $categoria)
                            @if ($categoria->id == $producto->idcategoria)
                                <p class="product-category">{{ $categoria->nombre }}</p>
                            @endif
                        @endforeach
                        <h3 class="product-name"><a href="#">{{ $producto->name }}</a></h3>
                        @if ($producto->idpromocion != '')
                            <h4 class="product-price">Bs.
                                {{ $producto->precioUnitario - $producto->precioUnitario * $descuento }}
                                <del class="product-old-price">Bs. {{ $producto->precioUnitario }}</del>
                            </h4>
                        @else
                            <h4 class="product-price">Bs. {{ $producto->precioUnitario }}</h4>
                        @endif
                        <div class="product-rating">
                            @for ($i = 0; $i < 5; $i++)
                                <i class='bx bxs-star'></i>
                            @endfor
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a
                                    favoritos</span></button>
                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Agregar para
                                    comparar</span></button>
                            <button class="quick-view">
                                Ver
                                <i class="fa fa-eye"></i><span class="tooltipp"><a
                                        href="{{ route('catalogo.show', $producto->id) }}" style="color: white">Vista
                                        rápida</a></span></button>
                            <form action="{{ route('detalleCarrito.store') }}" method="POST" enctype="multipart/form-data"
                                id="create{{ $contador_fila }}">
                                @csrf
                                <input type="number" id="cantidad" name="cantidad" min="1" max="1000"
                                    value="1">
                                @if ($producto->idpromocion != '')
                                    <input type="hidden" name="precio" id="precio"
                                        value="{{ $producto->precioUnitario - $producto->precioUnitario * $descuento }}">
                                @else
                                    <input type="hidden" name="precio" id="precio"
                                        value="{{ $producto->precioUnitario }}">
                                @endif
                                <input type="hidden" name="idProducto" id="idProducto" value="{{ $producto->id }}">
                                @auth
                                    <input type="hidden" name="idCarrito" id="idCarrito" value="{{ $carrito->id }}">
                                @endauth
                            </form>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn" form="create{{ $contador_fila }}"><i
                                class="fa fa-shopping-cart"></i> Añadir</button>
                    </div>
                </div>
            </div>
            @if ($contador == 3)
                <div class="col-md-12 col-xs-6">
                    <div class="product">
                    </div>
                </div>
                @php
                    $contador = 0;
                @endphp
            @endif
        @endforeach
        <div class="col-md-12 col-xs-6">
            <div class="product">
            </div>
        </div>
    </div>
    <div class="pagination justify-content-end">
        {!! $productos->links() !!}
    </div>
@endsection
