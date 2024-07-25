@extends('cliente.cliente')

@section('content')
<div id="breadcrumb" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="breadcrumb-header">Direcciones</h3>
        <ul class="breadcrumb-tree">
          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Direcciones</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if (session('message'))
      <div class="alert alert-success">{{ session('message') }}</div>
      @endif
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between align-items-center">
            <a href="{{ url('/home') }}" class="btn btn-primary">
              <i class="fa fa-arrow-left"></i> Volver
            </a>
            <a href="{{ route('AddressClient.create') }}" class="btn btn-success">
              <i class="fa fa-plus"></i> Nueva Dirección
            </a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Dirección 1</th>
                <th>Dirección 2</th>
                <th>Ciudad</th>
                <th>Departamento</th>
                <th>País</th>
                <th>Código Postal</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($direcciones as $direccion)
              <tr>
                <td>{{ $direccion->id }}</td>
                <td>{{ $direccion->address_1 }}</td>
                <td>{{ $direccion->address_2 }}</td>
                <td>{{ $direccion->city }}</td>
                <td>{{ $direccion->department }}</td>
                <td>{{ $direccion->country }}</td>
                <td>{{ $direccion->postal_code }}</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ url('cliente/AddressClient/' . $direccion->id . '/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i> Editar</a>
                    <button type="submit" class="btn btn-danger" form="delete_{{ $direccion->id }}" onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                      <i class="fa fa-trash"></i> Eliminar
                    </button>
                    <form action="{{ route('AddressClient.destroy', $direccion->id) }}" id="delete_{{ $direccion->id }}" method="POST" enctype="multipart/form-data" hidden>
                      @csrf
                      @method('DELETE')
                    </form>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="pagination justify-content-end">
            {!! $direcciones->links() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

