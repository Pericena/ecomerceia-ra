@extends('administrador.admin')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card rounded-3">
      <div class="card-header text-center">
        <h2><b>PRODUCTOS</b></h2>
        <div class="d-flex justify-content-between flex-wrap">
          <a href="{{ url('administrador/producto/create') }}" class="btn btn-primary mb-2">
            <i class="fa fa-plus"></i> Nuevo Producto
          </a>
          <a href="{{ url('administrador/notaIngreso') }}" class="btn btn-primary mb-2">
            <i class="fa fa-sign-in"></i> Nota De Ingreso
          </a>
          <a href="{{ url('administrador/notaBaja') }}" class="btn btn-primary mb-2">
            <i class="fa fa-trash"></i> Dar De Baja
          </a>
          <a href="{{ url('administrador/categoria') }}" class="btn btn-primary mb-2">
            <i class="fa fa-list"></i> Categorias
          </a>
          <a href="{{ url('administrador/marca') }}" class="btn btn-primary mb-2">
            <i class="fa fa-tag"></i> Marcas
          </a>
          <a href="{{ route('reportes.producto', 'pdf') }}" class="btn btn-info mb-2">
            <i class="fa fa-file-pdf-o"></i> Reporte PDF
          </a>
          {{-- <a href="{{ route('reportes.producto', 'csv') }}" class="btn btn-info mb-2">
            <i class="fa fa-file-csv"></i> Reporte CSV
          </a>
          <a href="{{ route('reportes.producto', 'xlsx') }}" class="btn btn-info mb-2">
            <i class="fa fa-file-excel-o"></i> Reporte XLSX
          </a> --}}
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Descripción</th>
              <th>Stock</th>
              <th>Precio</th>
              <th>Marca</th>
              <th>Categoría</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($productos as $producto)
            <tr>
              <td>{{ $producto->id }}</td>
              <td>{{ $producto->name }}</td>
              <td><img src="{{ asset('public/img/' . $producto->imagen) }}" alt="{{ $producto->name }}" class="img-fluid rounded" width="50"></td>
              <td>{{ $producto->descripcion }}</td>
              <td>{{ $producto->stock }}</td>
              <td>{{ $producto->precioUnitario }}</td>
              <td>
                @foreach ($marcas as $marca)
                @if ($marca->id == $producto->idmarca)
                {{ $marca->nombre }}
                @endif
                @endforeach
              </td>
              <td>
                @foreach ($categorias as $categoria)
                @if ($categoria->id == $producto->idcategoria)
                {{ $categoria->nombre }}
                @endif
                @endforeach
              </td>
              <td>
                <div class="btn-group">
                  <a href="{{ url('administrador/producto/' . $producto->id . '/edit') }}" class="btn btn-info">
                    <i class="fas fa-pencil-alt"></i>
                  </a>
                  <button type="submit" class="btn btn-danger" form="delete_{{ $producto->id }}" onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                    <i class="fas fa-trash"></i>
                  </button>
                  <form action="{{ route('producto.destroy', $producto->id) }}" id="delete_{{ $producto->id }}" method="POST" hidden>
                    @csrf
                    @method('DELETE')
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        {{ $productos->links() }}
      </div>
    </div>
  </div>
</div>
@endsection

