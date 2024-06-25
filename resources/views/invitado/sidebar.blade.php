<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="index.html">
      <span class="align-middle">Panel</span>
    </a>
    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Usuario
      </li>
      <li class="sidebar-item ">
        <a class="sidebar-link" href="{{ url('admin/usuarios') }}">
          <i class="align-middle" data-feather="users"></i> <span class="align-middle">Usuraios</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('admin/tecnicos') }}">
          <i class="align-middle" data-feather="users"></i> <span class="align-middle">Tecnicos</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('admin/clientes') }}">
          <i class="align-middle" data-feather="users"></i> <span class="align-middle">Clientes</span>
        </a>
      </li>
      <li class="sidebar-header">
        Asistencia
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('admin/asistencias') }}">
          <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Asistencias</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('admin/horarios') }}">
          <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Horarios</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('admin/ubicaciones') }}">
          <i class="align-middle" data-feather="map-pin"></i> <span class="align-middle">Ubicaciones</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('admin/reportes') }}">
          <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Reportes</span>
        </a>
      </li>
      <li class="sidebar-header">
        Orden
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('admin/ordenes') }}">
          <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Ordenes</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('admin/solicitudes') }}">
          <i class="align-middle" data-feather="bell"></i> <span class="align-middle">Solicitudes</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('admin/conexiones') }}">
          <i class="align-middle" data-feather="globe"></i> <span class="align-middle">Conexiones</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('admin/contratos') }}">
          <i class="align-middle" data-feather="list"></i> <span class="align-middle">Contratos</span>
        </a>
      </li>
    </ul>
    <div class="sidebar-cta">
    </div>
  </div>
</nav>
