<div class="product-featured">
    <div class="showcase-wrapper has-scrollbar">
        <?php $a = 0; ?>
        @foreach ($productos as $producto)
            <?php $a = $a + 1; ?>
            <div class="showcase-container">
                <h2 class="title">Oferta</h2>
                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="{{ asset('public/img/' . $producto->imagen) }}" alt="" width="500"
                            height="350">
                    </div>
                    <div class="showcase-content">
                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>
                        @foreach ($categorias as $categoria)
                            @if ($categoria->id == $producto->idcategoria)
                                <a href="#">
                                    <h3 class="showcase-title">{{ $categoria->nombre }}</h3>
                                </a>
                            @endif
                        @endforeach
                        <p class="showcase-desc">
                            {{ $producto->name }}
                        </p>
                        <div class="price-box">
                            @if ($producto->idpromocion != '')
                                <h4 class="price">Bs
                                    {{ $producto->precioUnitario - $producto->precioUnitario * $descuento }}
                                    <del class="product-old-price">Bs {{ $producto->precioUnitario }}</del>
                                </h4>
                            @else
                                <h4 class="product-price">Bs {{ $producto->precioUnitario }}</h4>
                            @endif
                        </div>
                        <button class="add-cart-btn" form="create{{ $a }}">
                            <i class="fa fa-shopping-cart"></i> Añadir al carrito
                        </button>
                        <div class="showcase-status">
                            <div class="wrapper">
                                <p>Descuento:
                                    @if ($producto->idpromocion != '')
                                        @foreach ($promociones as $promocion)
                                            @if ($producto->idpromocion == $promocion->id)
                                                <span class="sale"><b>-{{ $promocion->descuento }}%</b></span>
                                                <?php $descuento = $promocion->descuento / 100; ?>
                                            @endif
                                        @endforeach
                                    @endif
                                    @if ($producto->stock == 0)
                                        <span class="new">Sin Stock</span>
                                    @endif
                                </p>
                                <p>disponible: <b>40</b></p>
                            </div>
                            <div class="showcase-status-bar"></div>
                        </div>
                        <div class="countdown-box">
                            <p class="countdown-desc">
                                ¡APRESÚRATE! LA OFERTA TERMINA EN:
                            </p>
                            <div class="countdown">
                                <div class="countdown-content">
                                    <p class="display-number">360</p>
                                    <p class="display-text">Days</p>
                                </div>
                                <div class="countdown-content">
                                    <p class="display-number">24</p>
                                    <p class="display-text">Hours</p>
                                </div>
                                <div class="countdown-content">
                                    <p class="display-number">59</p>
                                    <p class="display-text">Min</p>
                                </div>
                                <div class="countdown-content">
                                    <p class="display-number">00</p>
                                    <p class="display-text">Sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
