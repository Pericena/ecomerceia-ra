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

<body id="top">


  <a-scene arjs embedded renderer="logarithmicDepthBuffer: true;" vr-mode-ui="enabled: false" gesture-detector
    id="scene">
    <a-assets>
      <a-asset-item id="bowser" src="{{ asset('public/img/' . $producto->imagen) }}">
      </a-asset-item>
    </a-assets>
    <a-marker preset="hiro" raycaster="objects: .clickable" emitevents="true" cursor="fuse: false; rayOrigin: mouse;"
      id="markerA">
      <a-entity id="bowser-model" gltf-model="#bowser" position="0 0 0" scale="0.05 0.05 0.05" class="clickable"
        gesture-handler>
      </a-entity>
    </a-marker>
    <a-entity camera></a-entity>
  </a-scene>

  <style>
  .container-chat {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
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
    background-color: #0056b3;
  }
  </style>

</body>

</html>