@extends('administrador.admin')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>


@section('content')
<div class="card mt-3" id="content">
  <div class="card-header text-center">
    <h1><b>BITÁCORA</b></h1>
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
    <div class="pagination justify-content-end">
      {!! $bitacoras->links() !!}
    </div>
    <div class="table-responsive">
      <table class="table table-striped" id="bitacora" style="width:100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Tipo De Usuario</th>
            <th>Actividad</th>
            <th>Fecha - Hora</th>
            <th>Dirección IP</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($bitacoras as $bitacora)
          <tr>
            <td>{{ $bitacora->id }}</td>
            <td>{{ $bitacora->name }}</td>
            <td>{{ $bitacora->tipou }}</td>
            <td>{{ $bitacora->actividad }}</td>
            <td>{{ $bitacora->fechaHora }}</td>
            <td>{{ $bitacora->ip }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="pagination justify-content-end">
      {!! $bitacoras->links() !!}
    </div>
  </div>
</div>
@endsection
