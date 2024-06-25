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

  <div class="row">
    <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Gráfico de Ventas Diarias</h3>
        </div>
        <div class="box-body">
          <canvas id="ventasDiariasChart" style="height: 300px;"></canvas>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Gráfico de Usuarios Registrados por Mes</h3>
        </div>
        <div class="box-body">
          <canvas id="usuariosPorMesChart" style="height: 300px;"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var ctx1 = document.getElementById('ventasDiariasChart').getContext('2d');
  var ventasDiariasChart = new Chart(ctx1, {
    type: 'line'
    , data: {
      labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo']
      , datasets: [{
        label: 'Ventas Diarias ($)'
        , data: [1500, 2200, 1800, 2500, 2000, 2800, 3000]
        , borderColor: '#3c8dbc'
        , borderWidth: 2
        , fill: false
      }]
    }
    , options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  var ctx2 = document.getElementById('usuariosPorMesChart').getContext('2d');
  var usuariosPorMesChart = new Chart(ctx2, {
    type: 'bar'
    , data: {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio']
      , datasets: [{
        label: 'Usuarios Registrados'
        , data: [50, 60, 55, 70, 65, 80]
        , backgroundColor: '#00a65a'
        , borderColor: '#00a65a'
        , borderWidth: 1
      }]
    }
    , options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

</script>
@endsection

