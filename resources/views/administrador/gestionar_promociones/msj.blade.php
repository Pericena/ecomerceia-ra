@extends('administrador.admin')

@section('content')
<main class="d-flex w-100">
  <div class="container d-flex flex-column">
    <div class="row vh-100 justify-content-center align-items-center">
      <div class="col-sm-10 col-md-8 col-lg-6">
        <div class="text-center mt-4">
          <h1 class="h2">Mensaje - Promoción {{ $promocion->descuento }}%</h1>
          <p class="lead">
            Asegúrese de ingresar los datos correctos
          </p>
        </div>
        @if (session('message'))
        <div class="alert alert-success text-center">
          {{ session('message') }}
        </div>
        @endif
        <div class="card shadow">
          <div class="card-body">
            <div class="m-sm-4">
              <!-- Formulario para enviar el mensaje -->
              <form action="{{ route('promoMail.update', $promocion->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <p class="form-label">Cuerpo del mensaje</label>
                  <textarea class="form-control" name="mensaje" rows="4" placeholder="Ingrese el mensaje para la promoción">{{ old('mensaje') }}</textarea>
                  @error('mensaje')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <p class="form-label">Enviar a:</p>
                  <select name="idcliente" class="form-control">
                    <option selected value="">Seleccione un cliente...</option>
                    <option value="todos">Enviar a todos los clientes</option>
                    @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->name }}</option>
                    @endforeach
                  </select>
                  @error('idcliente')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <input type="hidden" name="idpromocion" value="{{ $promocion->id }}" />
                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-lg btn-primary">
                    Enviar <i class="fas fa-envelope"></i>
                  </button>
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

