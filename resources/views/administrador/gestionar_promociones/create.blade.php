@extends('administrador.admin')

@section('content')
<main class="d-flex w-100">
  <div class="container d-flex flex-column">
    <div class="row vh-100 justify-content-center align-items-center">
      <div class="col-sm-10 col-md-8 col-lg-6">
        <div class="text-center mt-4">
          <h1 class="h2">Agregar Una Nueva Promoción</h1>
          <p class="lead">
            Asegúrese de ingresar los datos correctos
          </p>
        </div>
        <div class="card shadow">
          <div class="card-body">
            <div class="m-sm-4">
              <!-- Formulario para agregar nueva promoción -->
              <form action="{{ route('promociones.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Descuento (%)</label>
                  <div class="input-group">
                    <input class="form-control form-control-lg" type="number" name="descuento" min="1" max="100" placeholder="Ingrese el descuento en términos de porcentaje" required>
                    <span class="input-group-text">%</span>
                  </div>
                  @error('descuento')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Lanzamiento</label>
                  <input class="form-control" type="datetime-local" name="fhiniciada" placeholder="Ingrese la fecha y hora de lanzamiento" required>
                  @error('fhiniciada')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <input type="hidden" name="stock" class="form-control" value="0" />
                <div class="mb-3">
                  <label class="form-label">Finalización</label>
                  <input class="form-control form-control-lg" type="datetime-local" name="fhfinalizada" placeholder="Ingrese la fecha y hora de finalización" required>
                  @error('fhfinalizada')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
                  <a href="{{ url('administrador/promociones') }}" class="btn btn-secondary ms-2">
                    Volver
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

