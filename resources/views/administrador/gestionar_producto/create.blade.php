@extends('administrador.admin')

@section('content')
<main class="card d-flex w-full">
  <div class="container d-flex flex-column">
    <div class="row vh-110">
      <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="text-center mt-3">
        </div>
        <div class="d-table-cell align-middle">
          <div class="text-center mt-4">
            <h1 class="h2">Agregar Nuevo Producto</h1>
            <p class="lead">
              Asegurese de ingresar los datos correctos
            </p>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="m-sm-4">
                <form action="{{ route('producto.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Ingrese el nombre del producto" />
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Descripcion</label>
                    <input class="form-control form-control-lg" type="text" name="descripcion" placeholder="Ingrese una descripcion" />
                    @error('descripcion')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <input type="hidden" name="stock" class="form-control" value="0" />
                  <div class="mb-3">
                    <label class="form-label">Precio De Venta</label>
                    <input class="form-control form-control-lg" type="decimal" name="precioUnitario" placeholder="00.00" />
                    @error('precioUnitario')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Categoria</label>
                    <select name="idcategoria" class="form-control">
                      @foreach ($categorias as $categoria)
                      <option value="{{ $categoria->id }}">
                        {{ $categoria->nombre }}
                      </option>
                      @endforeach
                      <option selected value=""> Seleccione Una Categoria... </option>
                    </select>
                    @error('idcategoria')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Marca</label>
                    <select name="idmarca" class="form-control">
                      @foreach ($marcas as $marca)
                      <option value="{{ $marca->id }}">
                        {{ $marca->nombre }}
                      </option>
                      @endforeach
                      <option selected value=""> Seleccione Una Marca... </option>
                    </select>
                    @error('idmarca')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  {{-- <div class="mb-3">
                    <label class="form-label">Imagen</label>
                    <input class="form-control" type="file" name="imagen" />
                  </div> --}}
                  <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen o Archivo</label>
                    <input id="imagen" class="form-control @error('imagen') is-invalid @enderror" type="file" name="imagen" accept=".jpg,.jpeg,.png,.glb,.mp4" />
                    @error('imagen')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Promocion - Descuento</label>
                    <select name="idpromocion" class="form-control">
                      @foreach ($promociones as $promocion)
                      <option value="{{ $promocion->id }}">
                        - {{ $promocion->descuento }} %
                      </option>
                      @endforeach
                      <option selected value=""> Seleccione Una Promoción... </option>
                    </select>
                    @error('idpromocion')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="text-center mt-3">
                    <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
                    <a href="{{ url('administrador/producto') }}" class="btn btn-primary float-end">Volver</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
