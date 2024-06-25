@extends('administrador.admin')

@section('content')
<main class="d-flex w-100">
  <div class="container d-flex flex-column">
    <div class="row vh-100">
      <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">
          <div class="text-center mt-4">
            <h1 class="h2">Agregar Nueva Marca</h1>
            <p class="lead">
              Asegúrese de ingresar los datos correctos
            </p>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="m-sm-4">
                <form action="{{ route('marca.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <p class="form-label">Nombre</p>
                    <input class="form-control form-control-lg" type="text" name="nombre" placeholder="Ingrese el nombre de la marca" />
                    @error('nombre')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="text-center mt-3">
                    <button type="submit" class="btn btn-lg btn-primary"><i class="fas fa-save me-2"></i>Guardar</button>
                    <a href="{{ url('administrador/marca') }}" class="btn btn-primary"><i class="fas fa-arrow-left me-2"></i>Volver</a>
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

