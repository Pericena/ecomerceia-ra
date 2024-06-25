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


    <div class="container">
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
    </div>


    <script>
      // script.js
      const outfitForm = document.getElementById('outfit-form');
      const outfitDisplay = document.getElementById('outfit');

      const outfits = {
        claro: {
          camiseta: [{
              name: 'Camiseta Blanca'
              , image: 'img/camiseta_blanca.png'
            }
            , {
              name: 'Camiseta Azul'
              , image: 'img/camiseta_azul.png'
            }
          ]
          , pantalon: [{
              name: 'Pantalón Negro'
              , image: 'img/pantalon_negro.png'
            }
            , {
              name: 'Pantalón Beige'
              , image: 'img/pantalon_beige.png'
            }
          ]
          , zapatos: [{
              name: 'Zapatos Negros'
              , image: 'img/zapatos_negros.png'
            }
            , {
              name: 'Zapatos Blancos'
              , image: 'img/zapatos_blancos.png'
            }
          ]
        }
        , medio: {
          camiseta: [{
              name: 'Camiseta Verde'
              , image: 'img/camiseta_verde.png'
            }
            , {
              name: 'Camiseta Gris'
              , image: 'img/camiseta_gris.png'
            }
          ]
          , pantalon: [{
              name: 'Pantalón Azul'
              , image: 'img/pantalon_azul.png'
            }
            , {
              name: 'Pantalón Marrón'
              , image: 'img/pantalon_marron.png'
            }
          ]
          , zapatos: [{
              name: 'Zapatos Marrones'
              , image: 'img/zapatos_marrones.png'
            }
            , {
              name: 'Zapatos Grises'
              , image: 'img/zapatos_grises.png'
            }
          ]
        }
        , oscuro: {
          camiseta: [{
              name: 'Camiseta Roja'
              , image: 'img/camiseta_roja.png'
            }
            , {
              name: 'Camiseta Amarilla'
              , image: 'img/camiseta_amarilla.png'
            }
          ]
          , pantalon: [{
              name: 'Pantalón Verde'
              , image: 'img/pantalon_verde.png'
            }
            , {
              name: 'Pantalón Gris'
              , image: 'img/pantalon_gris.png'
            }
          ]
          , zapatos: [{
              name: 'Zapatos Azules'
              , image: 'img/zapatos_azules.png'
            }
            , {
              name: 'Zapatos Rojos'
              , image: 'img/zapatos_rojos.png'
            }
          ]
        }
      };

      document.getElementById('generate-outfit').addEventListener('click', generateOutfit);

      function generateOutfit() {
        const skinColor = document.getElementById('skin-color').value;
        const category = document.getElementById('category').value;

        const selectedOutfits = outfits[skinColor][category];
        const randomIndex = Math.floor(Math.random() * selectedOutfits.length);
        const selectedOutfit = selectedOutfits[randomIndex];

        displayOutfit(selectedOutfit);
      }

      function displayOutfit(outfit) {
        outfitDisplay.innerHTML = `
      <div class="outfit-item">
        <img src="${outfit.image}" alt="${outfit.name}" style="width: 100px; height: 100px;">
        <p>${outfit.name}</p>
      </div>
      `;
      }

    </script>

