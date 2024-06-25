@extends('administrador.admin')

@section('content')
<main class="d-flex w-100">
  <div class="container d-flex flex-column">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-sm-10 col-md-8 col-lg-6">
        <div class="card">
          <div class="card-body">
            <h1 class="h2 text-center">Agregar Nueva Categoría</h1>
            <p class="lead text-center mb-4">Asegúrese de ingresar los datos correctos</p>
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <form action="{{ route('categoria.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input id="nombre" type="text" name="nombre" class="form-control form-control-lg" placeholder="Ingrese el nombre de la categoría" required>
              </div>

              <div class="text-center mt-4">
                <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
                <a href="{{ url('administrador/categoria') }}" class="btn btn-secondary ms-2">Volver</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

