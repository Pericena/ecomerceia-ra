@extends('administrador.admin')

@section('content')
<div class="card mt-4">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h1>Formulario - Editar Empleados</h1>
    <a href="{{ route('empleados.index') }}" class="btn btn-primary">
      <i class="fas fa-arrow-left"></i> Volver
    </a>
  </div>
  <div class="card-body">
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST" enctype="multipart/form-data" id="update">
      @method('PUT')
      @csrf
      @include('administrador.gestionar_empleados.partials.form')
    </form>
  </div>
  <div class="card-footer text-right">
    <button class="btn btn-primary" form="update">
      <i class="fas fa-pencil-alt"></i> Editar
    </button>
  </div>
</div>
@endsection

