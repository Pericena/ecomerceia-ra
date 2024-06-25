@extends('administrador.admin')

@section('content')
@yield('content')
<div class="row">
  <div class="col-md-12">
    @if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
          <h1 class="mb-0"><b>MARCAS</b></h1>
          <a href="{{ url('administrador/marca/create') }}" class="btn btn-primary"><i class="fas fa-plus-circle me-2"></i> Nueva Marca</a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($marcas as $marca)
              <tr>
                <td>{{ $marca->id }}</td>
                <td>{{ $marca->nombre }}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ url('administrador/marca/' . $marca->id . '/edit') }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i> Editar</a>
                    <button type="button" class="btn btn-danger" onclick="eliminarMarca({{ $marca->id }})">
                      <i class="fas fa-trash"></i> Eliminar
                    </button>
                  </div>
                  <form id="deleteForm_{{ $marca->id }}" action="{{ route('marca.destroy', $marca->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="pagination justify-content-end">
          {!! $marcas->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function eliminarMarca(id) {
    if (confirm('¿Estás seguro de eliminar la marca?')) {
      document.getElementById('deleteForm_' + id).submit();
    }
  }

</script>
@endsection

