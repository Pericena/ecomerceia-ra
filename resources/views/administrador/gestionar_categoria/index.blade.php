@extends('administrador.admin')

@section('content')
<div class="row">
  <div class="col-md-12">
    @if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
          <h1 class="mb-0"><b>CATEGORIAS</b></h1>
          <a href="{{ url('administrador/categoria/create') }}" class="btn btn-primary">
            <i class="fas fa-plus-circle me-2"></i> Nueva Categoría
          </a>
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
              @foreach ($categorias as $categoria)
              <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="{{ url('administrador/categoria/' . $categoria->id . '/edit') }}" class="btn btn-info">
                      <i class="fas fa-pencil-alt me-1"></i> Editar
                    </a>
                    <button type="button" class="btn btn-danger" onclick="eliminarCategoria({{ $categoria->id }})">
                      <i class="fas fa-trash me-1"></i> Eliminar
                    </button>
                  </div>
                  <form id="deleteForm_{{ $categoria->id }}" action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" style="display: none;">
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
          {!! $categorias->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function eliminarCategoria(id) {
    if (confirm('¿Estás seguro de eliminar la categoría?')) {
      document.getElementById('deleteForm_' + id).submit();
    }
  }

</script>
@endsection

