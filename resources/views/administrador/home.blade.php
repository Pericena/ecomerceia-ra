@extends('administrador.admin')

@section('content')
<div class="container-fluid">
  <h1 class="text-center">Bienvenido al Dashboard</h1>
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

  <hr>

  <div class="row">
    <div class="col-md-6">
      <div class="info-box bg-aqua">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Usuarios Registrados</span>
          <span class="info-box-number">120</span>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-shopping-cart"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Ventas Hoy</span>
          <span class="info-box-number">$6,500</span>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Últimas Órdenes</h3>
        </div>
        <div class="box-body">
          <ul class="list-unstyled">
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Productos Más Vendidos</h3>
        </div>
        <div class="box-body">
          <ul class="list-unstyled">
          </ul>
        </div>
      </div>
    </div>
  </div>


</div>
@endsection

@section('scripts')

@endsection

