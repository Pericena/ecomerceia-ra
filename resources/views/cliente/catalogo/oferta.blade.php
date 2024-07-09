  <link type="text/css" rel="stylesheet" href="https://35e3-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/cliente/css/style.css" />



  <link type="text/css" rel="stylesheet" href="https://35e3-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/assets/css/style-prefix.css">


<div class="product-featured">
  <h2 class="title">Oferta</h2>
  <div class="showcase-wrapper has-scrollbar">
    <?php $a = 0; ?>
    @foreach ($productos as $producto)
    <?php $a = $a + 1; ?>
    <div class="showcase-container">
      <div class="showcase">
        <div class="showcase-banner">
          {{-- <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
          <model-viewer id="miModelViewer" alt="ropa" src="{{ asset('public/img/' . $producto->imagen) }}" ar ar-modes="webxr scene-viewer quick-look" seamless-poster shadow-intensity="1" camera-controls ar ar-modes="webxr quick-look" ar-button ar-placement="floor" progress-bar width="500px" height="200px">
          </model-viewer> --}}
          <img src="{{ asset('public/img/' . $producto->imagen) }}" alt="" width="450" height="350">
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


    {{-- <div class="container">
      <h1>Generador de Outfit</h1>
      <form id="outfit-form">
        <label for="skin-color">Selecciona tu color de piel:</label>
        <select id="skin-color" name="skin-color">
          <option value="claro">Claro</option>
          <option value="medio">Medio</option>
          <option value="oscuro">Oscuro</option>
        </select>

        <label for="category">Selecciona la categoría de prenda:</label>
        <select id="category" name="category">
          <option value="camiseta">Camiseta</option>
          <option value="pantalon">Pantalón</option>
          <option value="zapatos">Zapatos</option>
        </select>

        <button type="button" id="generate-outfit">Generar Outfit</button>
      </form>

      <div id="outfit-display" class="outfit-display">
        <h2>Tu Outfit</h2>
        <div id="outfit"></div>
      </div>
    </div> --}}


