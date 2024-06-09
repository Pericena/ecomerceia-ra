<div class="product-container">

  <div class="container">


    <!--
          - SIDEBAR
        -->

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
                {{-- <img src="./assets/images/icons/dress.svg" alt="clothes" width="20" height="20" class="menu-title-img"> --}}
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
                {{-- <img src="./assets/images/icons/shoes.svg" alt="footwear" class="menu-title-img" width="20" height="20"> --}}

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
                {{-- <img src="./assets/images/icons/jewelry.svg" alt="clothes" class="menu-title-img" width="20" height="20"> --}}
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
                {{-- <img src="./assets/images/icons/perfume.svg" alt="perfume" class="menu-title-img" width="20" height="20"> --}}
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
                {{-- <img src="./assets/images/icons/perfume.svg" alt="perfume" class="menu-title-img" width="20" height="20"> --}}
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


    {{-- product-lista --}}
    <div class="product-box">

      <!--
            - PRODUCT MINIMAL
          -->

      {{-- <div class="product-minimal">

        <div class="product-showcase">

          <h2 class="title">New Arrivals</h2>

          <div class="showcase-wrapper has-scrollbar">

            <div class="showcase-container">

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/clothes-1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Relaxed Short full Sleeve T-Shirt</h4>
                  </a>

                  <a href="#" class="showcase-category">Clothes</a>

                  <div class="price-box">
                    <p class="price">$45.00</p>
                    <del>$12.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/clothes-2.jpg" alt="girls pink embro design top" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Girls pnk Embro design Top</h4>
                  </a>

                  <a href="#" class="showcase-category">Clothes</a>

                  <div class="price-box">
                    <p class="price">$61.00</p>
                    <del>$9.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/clothes-3.jpg" alt="black floral wrap midi skirt" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Black Floral Wrap Midi Skirt</h4>
                  </a>

                  <a href="#" class="showcase-category">Clothes</a>

                  <div class="price-box">
                    <p class="price">$76.00</p>
                    <del>$25.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/shirt-1.jpg" alt="pure garment dyed cotton shirt" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Pure Garment Dyed Cotton Shirt</h4>
                  </a>

                  <a href="#" class="showcase-category">Mens Fashion</a>

                  <div class="price-box">
                    <p class="price">$68.00</p>
                    <del>$31.00</del>
                  </div>

                </div>

              </div>

            </div>

            <div class="showcase-container">

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/jacket-5.jpg" alt="men yarn fleece full-zip jacket" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                  </a>

                  <a href="#" class="showcase-category">Winter wear</a>

                  <div class="price-box">
                    <p class="price">$61.00</p>
                    <del>$11.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/jacket-1.jpg" alt="mens winter leathers jackets" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                  </a>

                  <a href="#" class="showcase-category">Winter wear</a>

                  <div class="price-box">
                    <p class="price">$32.00</p>
                    <del>$20.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/jacket-3.jpg" alt="mens winter leathers jackets" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                  </a>

                  <a href="#" class="showcase-category">Jackets</a>

                  <div class="price-box">
                    <p class="price">$50.00</p>
                    <del>$25.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/shorts-1.jpg" alt="better basics french terry sweatshorts" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Better Basics French Terry Sweatshorts</h4>
                  </a>

                  <a href="#" class="showcase-category">Shorts</a>

                  <div class="price-box">
                    <p class="price">$20.00</p>
                    <del>$10.00</del>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="product-showcase">

          <h2 class="title">Trending</h2>

          <div class="showcase-wrapper  has-scrollbar">

            <div class="showcase-container">

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/sports-1.jpg" alt="running & trekking shoes - white" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Running & Trekking Shoes - White</h4>
                  </a>

                  <a href="#" class="showcase-category">Sports</a>

                  <div class="price-box">
                    <p class="price">$49.00</p>
                    <del>$15.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/sports-2.jpg" alt="trekking & running shoes - black" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Trekking & Running Shoes - black</h4>
                  </a>

                  <a href="#" class="showcase-category">Sports</a>

                  <div class="price-box">
                    <p class="price">$78.00</p>
                    <del>$36.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/party-wear-1.jpg" alt="womens party wear shoes" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Womens Party Wear Shoes</h4>
                  </a>

                  <a href="#" class="showcase-category">Party wear</a>

                  <div class="price-box">
                    <p class="price">$94.00</p>
                    <del>$42.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/sports-3.jpg" alt="sports claw women's shoes" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Sports Claw Women's Shoes</h4>
                  </a>

                  <a href="#" class="showcase-category">Sports</a>

                  <div class="price-box">
                    <p class="price">$54.00</p>
                    <del>$65.00</del>
                  </div>

                </div>

              </div>

            </div>

            <div class="showcase-container">

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/sports-6.jpg" alt="air tekking shoes - white" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Air Trekking Shoes - white</h4>
                  </a>

                  <a href="#" class="showcase-category">Sports</a>

                  <div class="price-box">
                    <p class="price">$52.00</p>
                    <del>$55.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/shoe-3.jpg" alt="Boot With Suede Detail" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Boot With Suede Detail</h4>
                  </a>

                  <a href="#" class="showcase-category">boots</a>

                  <div class="price-box">
                    <p class="price">$20.00</p>
                    <del>$30.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/shoe-1.jpg" alt="men's leather formal wear shoes" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Men's Leather Formal Wear shoes</h4>
                  </a>

                  <a href="#" class="showcase-category">formal</a>

                  <div class="price-box">
                    <p class="price">$56.00</p>
                    <del>$78.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/shoe-2.jpg" alt="casual men's brown shoes" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Casual Men's Brown shoes</h4>
                  </a>

                  <a href="#" class="showcase-category">Casual</a>

                  <div class="price-box">
                    <p class="price">$50.00</p>
                    <del>$55.00</del>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="product-showcase">

          <h2 class="title">Top Rated</h2>

          <div class="showcase-wrapper  has-scrollbar">

            <div class="showcase-container">

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/watch-3.jpg" alt="pocket watch leather pouch" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Pocket Watch Leather Pouch</h4>
                  </a>

                  <a href="#" class="showcase-category">Watches</a>

                  <div class="price-box">
                    <p class="price">$50.00</p>
                    <del>$34.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/jewellery-3.jpg" alt="silver deer heart necklace" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Silver Deer Heart Necklace</h4>
                  </a>

                  <a href="#" class="showcase-category">Jewellery</a>

                  <div class="price-box">
                    <p class="price">$84.00</p>
                    <del>$30.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/perfume.jpg" alt="titan 100 ml womens perfume" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Titan 100 Ml Womens Perfume</h4>
                  </a>

                  <a href="#" class="showcase-category">Perfume</a>

                  <div class="price-box">
                    <p class="price">$42.00</p>
                    <del>$10.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/belt.jpg" alt="men's leather reversible belt" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Men's Leather Reversible Belt</h4>
                  </a>

                  <a href="#" class="showcase-category">Belt</a>

                  <div class="price-box">
                    <p class="price">$24.00</p>
                    <del>$10.00</del>
                  </div>

                </div>

              </div>

            </div>

            <div class="showcase-container">

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/jewellery-2.jpg" alt="platinum zircon classic ring" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">platinum Zircon Classic Ring</h4>
                  </a>

                  <a href="#" class="showcase-category">jewellery</a>

                  <div class="price-box">
                    <p class="price">$62.00</p>
                    <del>$65.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/watch-1.jpg" alt="smart watche vital plus" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Smart watche Vital Plus</h4>
                  </a>

                  <a href="#" class="showcase-category">Watches</a>

                  <div class="price-box">
                    <p class="price">$56.00</p>
                    <del>$78.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/shampoo.jpg" alt="shampoo conditioner packs" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">shampoo conditioner packs</h4>
                  </a>

                  <a href="#" class="showcase-category">cosmetics</a>

                  <div class="price-box">
                    <p class="price">$20.00</p>
                    <del>$30.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/jewellery-1.jpg" alt="rose gold peacock earrings" class="showcase-img" width="70">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                  </a>

                  <a href="#" class="showcase-category">jewellery</a>

                  <div class="price-box">
                    <p class="price">$20.00</p>
                    <del>$30.00</del>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div> --}}



      <!--
            - PRODUCT GRID
          -->

       {{-- <div class="product-main">

        <h2 class="title">New Products</h2>

        <div class="product-grid">

          <div class="showcase">

            <div class="showcase-banner">

              <img src="./assets/images/products/jacket-3.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
              <img src="./assets/images/products/jacket-4.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

              <p class="showcase-badge">15%</p>

              <div class="showcase-actions">

                <button class="btn-action">
                  <ion-icon name="heart-outline"></ion-icon>
                </button>

                <button class="btn-action">
                  <ion-icon name="eye-outline"></ion-icon>
                </button>

                <button class="btn-action">
                  <ion-icon name="repeat-outline"></ion-icon>
                </button>

                <button class="btn-action">
                  <ion-icon name="bag-add-outline"></ion-icon>
                </button>

              </div>

            </div>

            <div class="showcase-content">

              <a href="#" class="showcase-category">jacket</a>

              <a href="#">
                <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
              </a>

              <div class="showcase-rating">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star-outline"></ion-icon>
                <ion-icon name="star-outline"></ion-icon>
              </div>

              <div class="price-box">
                <p class="price">$48.00</p>
                <del>$75.00</del>
              </div>

            </div>

          </div>
    
        </div>

      </div>  --}}



          <div class="product-main">
            <!-- section title -->
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
            <!-- /section title -->
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
                          <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
                          </script>

<model-viewer id="miModelViewer" alt="ropa" src="{{ asset('public/img/' . $producto->imagen) }}" ar ar-modes="webxr scene-viewer quick-look" seamless-poster shadow-intensity="1" camera-controls ar ar-modes="webxr quick-look" ar-button ar-placement="floor" progress-bar width="150px" height="150px">
</model-viewer>

{{-- <img class="card-banner" alt="" width="350" height="200" src="{{ asset('public/img/default-image.png') }}"> --}}




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



    </div>

  </div>

</div>

