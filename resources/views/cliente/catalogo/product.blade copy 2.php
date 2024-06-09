@extends('cliente.cliente')
@section('content')

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--- google font link-->
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
<script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
<script src="{{ asset('js/gesture-detector.js') }}"></script>
<script src="{{ asset('js/gesture-handler.js') }}"></script>



<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <h3 class="breadcrumb-header">{{ $producto->name }}</h3>
        <ul class="breadcrumb-tree">
          <li><a href="{{ url('/home') }}">Home</a></li>
          <li class="">Producto</li>
          <li class="active">{{ $producto->name }}</li>
        </ul>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /BREADCRUMB -->








<!-- Ventana emergente para usar gafas VR -->
<div class="popup" id="vrPopup">
  <div class="popup-message">
    <h2>Para iniciar</h2>
    <p>descarga el código QR y escanéalo con la cámara de tu dispositivo.
    </p>
    <p>
      ¡Explora nuestro probador virtual de ropa y descubre cómo te queda antes de comprar!
    </p>
    <center>
      <a href="{{ asset('cliente/img/qr.png') }}" download="hiro.png" id="downloadLink">
        <img src="{{ asset('cliente/img/qr.png') }}" alt="Código QR" id="qrCode" width="150" height="150">
        <br>
        <p>Descargar</p>
      </a>
    </center>
    <button class="btbaok" onclick="closePopup()"><i class='bx bxs-camera bx-md'></i></button>





  </div>
</div>


<!-- Agregar una tarjeta de instrucciones de movimiento -->
<div class="card">
  <p><i class='bx bx-joystick'></i></p>
  <p><i class='bx bxs-up-arrow-square'></i></p>
  <p><i class='bx bxs-down-arrow-square'></i></p>
  <p><i class='bx bxs-right-arrow-square'></i></p>
  <p><i class='bx bxs-left-arrow-square'></i></p>
</div>

<div class="container-chat">
  <p class="data1">It is a finite region of space described in Einstein's equations, </p>
  <p class="data2">whose interior has a mass concentration high enough to generate a gravitational field.</p>
</div>

<a-scene arjs embedded renderer="logarithmicDepthBuffer: true;" vr-mode-ui="enabled: false" gesture-detector id="scene">
  <a-assets>
    <a-asset-item id="bowser" src="{{ asset('public/img/' . $producto->imagen) }}">
    </a-asset-item>
  </a-assets>

  <a-marker preset="hiro" raycaster="objects: .clickable" emitevents="true" cursor="fuse: false; rayOrigin: mouse;" id="markerA">

    <a-entity id="bowser-model" gltf-model="#bowser" position="0 0 0" scale="0.05 0.05 0.05" class="clickable" gesture-handler>
    </a-entity>

  </a-marker>
  <a-entity camera></a-entity>
</a-scene>


<audio autoplay>
  <source src="./sala/sonido/1blackhole.mp3" type="audio/mpeg">
  Tu navegador no soporta el elemento de audio.
</audio>



<script>
  function goBack() {
    window.history.back();
  }

</script>

<style>
  .btbaok {
    color: #ffffff;
    font-size: 20px;
    padding: 10px;
    background: transparent;
    border-radius: 10%;
    align-items: center;
    text-align: center;
  }

  /* Estilo para la ventana emergente */
  .popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(51, 51, 51, 0.7);
    z-index: 1;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .popup-message {
    background: rgb(3, 6, 33);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgb(3, 6, 33);
    color: #fff;

  }

  .card {
    position: fixed;
    top: 100px;
    left: 10px;
    background: rgb(3, 6, 33);
    color: white;
    padding: 10px;
    border-radius: 10px;
    font-size: 16px;
  }



  .container-chat {
    position: fixed;
    top: 500px;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    background: rgb(3, 6, 33);
    color: white;
    padding: 10px;
    border-radius: 10px;
    font-size: 10px;
  }

  .data1 {
    float: left;
  }

  .data2 {
    float: right;
  }

  .back-button {
    text-align: center;
    background-color: #191d21;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
  }

  .back-button:hover {
    background-color: rgb(3, 6, 33);
  }

</style>


<script>
  // Función para abrir la ventana emergente
  function openPopup() {
    var popup = document.getElementById("vrPopup");
    popup.style.display = "flex";
  }

  // Función para cerrar la ventana emergente
  function closePopup() {
    var popup = document.getElementById("vrPopup");
    popup.style.display = "none";
  }

  // Función para detectar si el navegador es Google Chrome
  function isChrome() {
    const isChromium = window.chrome;
    const winNav = window.navigator;
    const vendorName = winNav.vendor;
    const isOpera = winNav.userAgent.indexOf("OPR") > -1;
    const isIEedge = winNav.userAgent.indexOf("Edg") > -1;

    if (isChromium !== null && typeof isChromium !== "undefined" && isOpera === false && isIEedge === false) {
      // Es Google Chrome
      return true;
    }

    return false;
  }

  // Función para mostrar un mensaje si el navegador es Google Chrome
  function showMessage() {
    if (isChrome()) {
      // alert("Estás usando Google Chrome.");
    } else {
      alert("You are not using Google Chrome. the commet coders app only works for google chrome");
    }
  }

  // Llama a la función para mostrar el mensaje
  showMessage();



  // Abre la ventana emergente al cargar la página
  window.onload = openPopup;

</script>






<!-- SECTION -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <!-- Product main img -->
      <div class="col-md-5 col-md-push-2">
        <div id="product-main-img">
          <div class="product-preview">
            {{-- <img src="{{ asset('public/img/' . $producto->imagen) }}" alt=""> --}}
            <model-viewer id="miModelViewer" alt="ropa" src="{{ asset('public/img/' . $producto->imagen) }}" ar ar-modes="webxr scene-viewer quick-look" seamless-poster shadow-intensity="1" camera-controls ar ar-modes="webxr quick-look" ar-button ar-placement="floor" progress-bar width="400px" height="400px">
            </model-viewer>






          </div>
          <!--
                                                                    <div class="product-preview">
                                                                        <img src="./img/product03.png" alt="">
                                                                    </div>
                                                                    -->
        </div>
      </div>
      <!-- /Product main img -->

      <!-- Product thumb imgs -->
      <div class="col-md-2  col-md-pull-5">
        <div id="product-imgs">
          <div class="product-preview">
            {{-- <img src="{{ asset('public/img/' . $producto->imagen) }}" alt=""> --}}


            <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
            <ul class="grid-list">
              <li>
                <div class="product-card">
                  <div class="card-banner img-holder" style="--width: 160; --height: 260;background-color: rgb(255, 255, 255);">

                    <model-viewer id="miModelViewer" alt="ropa" src="{{ asset('public/img/' . $producto->imagen) }}" ar ar-modes="webxr scene-viewer quick-look" seamless-poster shadow-intensity="1" camera-controls ar ar-modes="webxr quick-look" ar-button ar-placement="floor" progress-bar width="400px" height="400px">
                    </model-viewer>
                  </div>


                </div>
              </li>

            </ul>



          </div>
          <!--
                                                                    <div class="product-preview">
                                                                        <img src="./img/product03.png" alt="">
                                                                    </div>
                                                                    -->
        </div>
      </div>
      <!-- /Product thumb imgs -->

      <!-- Product details -->
      <div class="col-md-5">
        <div class="product-details">
          <h2 class="product-name">{{ $producto->name }}</h2>
          <div>
            @if ($producto->idpromocion != '')
            @foreach ($promociones as $promocion)
            @if ($producto->idpromocion == $promocion->id)
            <?php $descuento = $promocion->descuento / 100; ?>
            <h3 class="product-price">Bs
              {{ $producto->precioUnitario - $producto->precioUnitario * $descuento }}
              <del class="product-old-price">Bs {{ $producto->precioUnitario }}</del>
            </h3>
            @endif
            @endforeach
            @else
            <h3 class="product-price">Bs {{ $producto->precioUnitario }}
              @endif
              @if ($producto->stock != 0)
              <span class="product-available">In Stock</span>
              @else
              <span class="product-available">Not Stock</span>
              @endif
          </div>
          <p>{{ $producto->descripcion }}</p>

          <div class="add-to-cart">
            <form action="{{ route('detalleCarrito.store') }}" method="POST" enctype="multipart/form-data" id="add">
              @csrf
              @if ($producto->idpromocion != '')
              <input type="hidden" name="precio" id="precio" value="{{ $producto->precioUnitario - $producto->precioUnitario * $descuento }}">
              @else
              <input type="hidden" name="precio" id="precio" value="{{ $producto->precioUnitario }}">
              @endif
              <input type="hidden" name="idProducto" id="idProducto" value="{{ $producto->id }}">
              @auth
              <input type="hidden" name="idCarrito" id="idCarrito" value="{{ $carrito->id }}">
              @endauth
              <div class="qty-label">
                Qty
                <div class="input-number">
                  <input type="number" id="cantidad" name="cantidad" min="1" max="1000" value="1">
                  <span class="qty-up">+</span>
                  <span class="qty-down">-</span>
                </div>
              </div>
              <button class="add-to-cart-btn" form="add"><i class="fa fa-shopping-cart"></i> add to
                cart</button>
            </form>
          </div>
          <ul class="product-btns">
            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
          </ul>

          <ul class="product-links">
            <li>Categoría:</li>
            @foreach ($categorias as $categoria)
            @if ($producto->idcategoria == $categoria->id)
            <li><a href="{{ route('categoriaShow.show', $categoria->id) }}">{{ $categoria->nombre }}</a>
            </li>
            @endif
            @endforeach
            <li>Marca:</li>
            @foreach ($marcas as $marca)
            @if ($producto->idmarca == $marca->id)
            <li>{{ $marca->nombre }}</li>
            @endif
            @endforeach
          </ul>

          <ul class="product-links">
            <li>Share:</li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
          </ul>

        </div>
      </div>
      <!-- /Product details -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /SECTION -->

<!-- Section -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">

      <div class="col-md-12">
        <div class="section-title text-center">
          <h3 class="title">OTROS PRODUCTOS</h3>
        </div>
      </div>
      <!-- Products tab & slick -->
      <div class="col-md-12">
        <div class="row">
          <div class="products-tabs">
            <!-- tab -->
            <div id="tab1" class="tab-pane active">
              <div class="products-slick" data-nav="#slick-nav-1">
                <?php $a = 0; ?>
                @foreach ($productos as $producto)
                <?php $a = $a + 1; ?>
                <!-- product -->
                <div class="product">
                  <div class="product-img">
                    {{-- <img src="{{ asset('public/img/' . $producto->imagen) }}" alt=""> --}}

                    <ul class="grid-list">
                      <li>
                        <div class="product-card">
                          <div class="card-banner img-holder" style="--width: 160; --height: 260;background-color: rgb(255, 255, 255);">

                            <model-viewer id="miModelViewer" alt="ropa" src="{{ asset('public/img/' . $producto->imagen) }}" ar ar-modes="webxr scene-viewer quick-look" seamless-poster shadow-intensity="1" camera-controls ar ar-modes="webxr quick-look" ar-button ar-placement="floor" progress-bar width="150px" height="150px">
                            </model-viewer>
                          </div>


                        </div>
                      </li>

                    </ul>


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
                      <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                      <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                      <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">
                          <a href="{{ route('catalogo.show', $producto->id) }}" style="color: white">
                            quick view</a> </span></button>
                      <form action="{{ route('detalleCarrito.store') }}" method="POST" enctype="multipart/form-data" id="create{{ $a }}">
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
                    <button class="add-to-cart-btn" form="create{{ $a }}"><i class="fa fa-shopping-cart"></i> add to
                      cart</button>
                  </div>
                </div>
                <!-- /product -->
                @endforeach
              </div>
              <div id="slick-nav-1" class="products-slick-nav"></div>
            </div>
            <!-- /tab -->
          </div>
        </div>
      </div>
      <!-- Products tab & slick -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /Section -->
@endsection
