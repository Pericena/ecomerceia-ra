@extends('administrador.admin')
@section('content')
<div class="card mt-3">
  <div class="card-header d-inline">
    <h1>
      <center><b>CLIENTES</b></center>
    </h1>
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
  </div>
  <div class="card-body">
    <div class="row">
      @can('cliente.create')
      <div class="col-2">
        <a href="{{ route('clientes.create') }}" class="btn btn-primary ml-auto">
          <i class="fas fa-plus"></i>
          Agregar</a>
      </div>
      @endcan
      <div class="pagination justify-content-end">
        {{ $clientes->links() }}
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
          <?php
                        $valor = 1;
                        ?>
          @foreach ($clientes as $cliente)
          @if ($cliente->tipoc == 1)
          <tr>
            <th scope="row">{{ $valor++ }}</th>
            <td>{{ $cliente->name }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->ci }}</td>
            <td>{{ $cliente->sexo }}</td>
            <td>{{ $cliente->celular }}</td>
            <td>{{ $cliente->domicilio }}</td>
            <td>{{ $cliente->estadocli }}</td>
            {{-- <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                @can('cliente.update')
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
            @endcan
            @can('cliente.delete')
            <button type="submit" class="btn btn-danger" form="delete_{{ $cliente->id }}" onclick="return confirm('¿Estás seguro de eliminar el registro?')">
              <i class="fas fa-trash"></i>
            </button>
            <form action="{{ route('clientes.destroy', $cliente->id) }}" id="delete_{{ $cliente->id }}" method="POST" enctype="multipart/form-data" hidden>
              @csrf
              @method('DELETE')
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
</div>
<div class="pagination justify-content-end">
  {{ $clientes->links() }}
</div>
</div>
@endsection
