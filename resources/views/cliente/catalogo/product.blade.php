@section('content')

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
<script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>

<script src="https://35e3-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/js/gesture-detector.js"></script>

<script src="https://35e3-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/js/gesture-handler.js"></script>



<link type="text/css" rel="stylesheet" href="https://35e3-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/cliente/css/style.css">

 <link type="text/css" rel="stylesheet" href="https://35e3-181-41-144-10.ngrok-free.app/ecomerceia-ra/public/assets/css/style-prefix.css">






<div class="popup" id="vrPopup">
  <div class="popup-message">
    <h2>¡Bienvenido al Probador Virtual!</h2>
    <p>Descarga el código QR y escanéalo con la cámara de tu dispositivo.</p>
    <p>¡Explora nuestro probador virtual de ropa y descubre cómo te queda antes de comprar!</p>
    <center>
      {{-- <model-viewer id="miModelViewer" alt="ropa" src="{{ asset('public/img/' . $producto->modelo) }}" ar ar-modes="webxr scene-viewer quick-look" seamless-poster shadow-intensity="1" camera-controls ar ar-modes="webxr quick-look" ar-button ar-placement="floor" progress-bar width="400px" height="400px">
      </model-viewer> --}}
      <a href="{{ asset('cliente/img/qr.png') }}" download="hiro.png" id="downloadLink">
        <img src="{{ asset('cliente/img/qr.png') }}" alt="Código QR" id="qrCode" width="150" height="150">
        <br>
        <p>Descargar</p>
        <br>
        <a href="https://pericena.github.io/declaracion/datos/index3.html">
          Utilizar el Dispositivo movil
        </a>
      </a>
    </center>
    <button class="btbaok" onclick="closePopup()"><i class='bx bxs-camera bx-md'></i></button>
  </div>
</div>


<!-- Agregar una tarjeta de instrucciones de movimiento -->
<div class="card">
  <p><i class='bx bxs-up-arrow-square'></i></p>
  <p><i class='bx bxs-down-arrow-square'></i></p>
  <p><i class='bx bxs-right-arrow-square'></i></p>
  <p><i class='bx bxs-left-arrow-square'></i></p>
</div>



<style>
  /* Estilo para el icono */
  .img-camara {
    color: #000000;
    font-size: 5em;
    position: relative;
    top: -100px;
  }

  .btbaok {
    color: #000000;
    font-size: 20px;
    padding: 10px;
    background: transparent;
    border-radius: 10%;
    align-items: center;
    text-align: center;
  }

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
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgb(3, 6, 33);
    color: #000000;
  }

  .card {
    position: fixed;
    top: 100px;
    left: 10px;
    background: #fff;
    padding: 10px;
    border-radius: 10px;
    font-size: 16px;
    color: #000000;
  }

  .container-chat {
    position: fixed;
    top: 500px;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    background: rgb(3, 6, 33);
    color: #000000;
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
    color: #000000;
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

<br><br><br><br><br><br><br><br><br><br>


<div id="breadcrumb" class="section">
  <div class="container">
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
  </div>
</div>


<!-- SECTION -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-push-2">
        <div class="product-preview">
          <a-scene arjs embedded renderer="logarithmicDepthBuffer: true;" vr-mode-ui="enabled: false" gesture-detector id="scene">
            <a-assets>
              <a-asset-item id="bowser" src="{{ asset('public/img/' . $producto->modelo) }}">
              </a-asset-item>
            </a-assets>
            <a-marker preset="hiro" raycaster="objects: .clickable" emitevents="true" cursor="fuse: false; rayOrigin: mouse;" id="markerA">
              <a-entity id="bowser-model" gltf-model="#bowser" position="0 0 0" scale="0.05 0.05 0.05" class="clickable" gesture-handler>
              </a-entity>
            </a-marker>
            <a-entity camera></a-entity>
          </a-scene>

        </div>
      </div>
      <div class="col-md-2 col-md-pull-5">
        <model-viewer id="miModelViewer" alt="ropa" src="{{ asset('public/img/' . $producto->modelo) }}" ar ar-modes="webxr scene-viewer quick-look" seamless-poster shadow-intensity="1" camera-controls ar ar-modes="webxr quick-look" ar-button ar-placement="floor" progress-bar style="width: 100%; height: 400px;">
        </model-viewer>
        <img src="{{ asset('public/img/' . $producto->imagen) }}" alt="" width="200" height="200">

      </div>
      <div class="col-md-5" style="color: #fff">
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
              <span class="product-available">En stock</span>
              @else
              <span class="product-available">No en stock</span>
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
                Cantidad
                <div class="input-number">
                  <input type="number" id="cantidad" name="cantidad" min="1" max="1000" value="1">
                  <span class="qty-up">+</span>
                  <span class="qty-down">-</span>
                </div>
              </div>
              <button class="add-to-cart-btn" form="add"><i class="fa fa-shopping-cart"></i>
                Añadir</button>
            </form>
          </div>
          <ul class="product-btns">
            <li><a href="#"><i class="fa fa-heart-o"></i> Deseos</a></li>
            <li><a href="#"><i class="fa fa-exchange"></i> Comparar</a></li>
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
            <li style="color: #fff">Share:</li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@extends('cliente.cliente')
