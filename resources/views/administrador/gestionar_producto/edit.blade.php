@extends('administrador.admin')

@section('content')
<main class="d-flex w-100">
  <div class="container d-flex flex-column">
    <div class="row vh-100 justify-content-center align-items-center">
      <div class="col-sm-10 col-md-8 col-lg-6">
        <div class="text-center mt-4">
          <h1 class="h2">Modificar Producto</h1>
          <p class="lead">
            Asegúrese de ingresar los datos correctos
          </p>
        </div>
        <div class="card">
          <div class="card-body">
            <form action="{{ route('producto.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input class="form-control form-control-lg" type="text" id="name" name="name" value="{{ $producto->name }}" placeholder="Ingrese el nombre del producto" />
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input class="form-control form-control-lg" type="text" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}" placeholder="Ingrese una descripción" />
                @error('descripcion')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input class="form-control form-control-lg" type="number" id="stock" name="stock" value="{{ $producto->stock }}" />
                @error('stock')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mb-3">
                <label for="precioUnitario" class="form-label">Precio</label>
                <input class="form-control form-control-lg" type="number" step="0.01" id="precioUnitario" name="precioUnitario" value="{{ $producto->precioUnitario }}" placeholder="00.00" />
                @error('precioUnitario')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mb-3">
                <label for="idcategoria" class="form-label">Categoría</label>
                <select name="idcategoria" id="idcategoria" class="form-control form-select">
                  <option value="">Seleccione una Categoría...</option>
                  @foreach ($categorias as $categoria)
                  <option value="{{ $categoria->id }}" @if ($categoria->id == $producto->idcategoria) selected @endif>
                    {{ $categoria->nombre }}
                  </option>
                  @endforeach
                </select>
                @error('idcategoria')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mb-3">
                <label for="idmarca" class="form-label">Marca</label>
                <select name="idmarca" id="idmarca" class="form-control form-select">
                  <option value="">Seleccione una Marca...</option>
                  @foreach ($marcas as $marca)
                  <option value="{{ $marca->id }}" @if ($marca->id == $producto->idmarca) selected @endif>
                    {{ $marca->nombre }}
                  </option>
                  @endforeach
                </select>
                @error('idmarca')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input class="form-control" type="file" id="imagen" name="imagen" />
              </div>

              <div class="mb-3">
                <label for="idpromocion" class="form-label">Promoción - Descuento</label>
                <select name="idpromocion" id="idpromocion" class="form-control form-select">
                  <option value="">Seleccione una Promoción...</option>
                  @foreach ($promociones as $promocion)
                  <option value="{{ $promocion->id }}" @if ($promocion->id == $producto->idpromocion) selected @endif>
                    - {{ $promocion->descuento }} %
                  </option>
                  @endforeach
                </select>
                @error('idpromocion')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="text-center mt-3">
                <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
                <a href="{{ url('administrador/producto') }}" class="btn btn-lg btn-secondary">Volver</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

