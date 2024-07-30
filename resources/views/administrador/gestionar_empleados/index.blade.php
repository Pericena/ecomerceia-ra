@extends('administrador.admin')

@section('content')
<div class="card mt-3">
  <div class="card-header text-center">
    <h1><b>EMPLEADOS</b></h1>
  </div>
    <div class="container">
      <div class="img-factura row ">
        <div class="col">
          <figure>
            <img src={{ asset('img/logo.png') }} class="figure-img img-fluid rounded" alt="logo" width="130" height="120" />
          </figure>
        </div>
        <div class="col">
          <figcaption class="figure-caption ">
            <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i>Empresa: Galil. </h5>
            <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i>Nit :2995623</h5>
            <h5><i class="fa fa-phone pr-1" aria-hidden="true"></i>Telf : (+591) 62152145</h5>
            <h5><i class="fa fa-envelope-o pr-1" aria-hidden="true"></i> Galil@gmail.com</h5>
          </figcaption>
        </div>
      </div>
    </div>
  <div class="card-body">
    <div class="row mb-3">
      @can('empleado.create')
      <div class="col-auto">
        <a href="{{ route('empleados.create') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i> Agregar
        </a>
      </div>
      @endcan
      <div class="col">
        <div class="pagination justify-content-end">
          {{ $empleados->links() }}
        </div>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>CI</th>
            <th>Sexo</th>
            <th>Celular</th>
            <th>Domicilio</th>
            <th>Estado</th>
            {{-- <th>Acciones</th> --}}
          </tr>
        </thead>
        <tbody>
          @foreach ($empleados as $index => $empleado)
          @if ($empleado->tipoe == 1)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $empleado->name }}</td>
            <td>{{ $empleado->email }}</td>
            <td>{{ $empleado->ci }}</td>
            <td>{{ $empleado->sexo }}</td>
            <td>{{ $empleado->celular }}</td>
            <td>{{ $empleado->domicilio }}</td>
            <td>{{ $empleado->estadoemp }}</td>
            {{-- <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                @can('empleado.update')
                <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-primary">
                  <i class="fas fa-pencil-alt"></i>
                </a>
                @endcan
                @can('empleado.delete')
                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" id="delete_{{ $empleado->id }}" style="display: inline-block;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
                @endcan
              </div>
            </td> --}}
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="pagination justify-content-end">
      {{ $empleados->links() }}
    </div>
  </div>
</div>
@endsection

