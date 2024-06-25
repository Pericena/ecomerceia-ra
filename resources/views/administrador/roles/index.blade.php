@extends('administrador.admin')

@section('content')
<div class="card mt-3">
  <div class="card-header text-center">
    <h1><b>ROLES Y PERMISOS</b></h1>
      <div class="container my-3">
        <div class="row align-items-center">
          <div class="col-md-2">
            <img src="{{ asset('img/logo.png') }}" class="img-fluid rounded" alt="logo" width="130" height="120">
          </div>
          <div class="col-md-10">
            <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i>Empresa: Galil</h5>
            <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i>Nit: 2995623</h5>
            <h5><i class="fa fa-phone pr-1" aria-hidden="true"></i>Telf: (+591) 62152145</h5>
            <h5><i class="fa fa-envelope-o pr-1" aria-hidden="true"></i>Galil@gmail.com</h5>
          </div>
        </div>
      </div>

  </div>



  <div class="card-header d-inline-flex">
    <a href="{{ route('roles.create') }}" class="btn btn-primary ml-auto">
      <i class="fas fa-plus"></i>
      Registrar
    </a>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <a href="{{ route('roles.edit', $user) }}" class="btn btn-primary">
                <i class="fas fa-pencil-alt"></i> Editar
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <div class="card-footer">
    {{ $users->links() }}
  </div>
</div>
@endsection

