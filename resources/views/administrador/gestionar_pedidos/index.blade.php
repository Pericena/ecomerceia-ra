@extends('administrador.admin')

@section('content')
@yield('content')
<div class="row">
  <div class="col-md-12">
    @if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card shadow">
      <div class="card-header">
        <h1 class="text-center"><b>PEDIDOS</b></h1>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Fecha - Hora Realizada</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Fecha De Envío</th>
                <th>Fecha De Entrega</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pedidos as $pedido)
              <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->fechaHora }}</td>
                <td>{{ $pedido->total }}</td>
                <td>{{ $pedido->estado }}</td>
                <td>{{ $pedido->fechaEnvio }}</td>
                <td>{{ $pedido->fechaEntrega }}</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Acciones">
                    <a href="{{ url('administrador/pedidos/' . $pedido->id . '/edit') }}" class="btn btn-info" title="Editar"><i class="fas fa-pencil-alt"></i></a>
                    <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-dark" title="Ver Detalles"><i class="fas fa-eye"></i></a>
                    <button type="submit" class="btn btn-danger" form="delete_{{ $pedido->id }}" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar el pedido?')">
                      <i class="fas fa-trash"></i>
                    </button>
                    <form action="{{ route('pedidos.destroy', $pedido->id) }}" id="delete_{{ $pedido->id }}" method="POST" style="display: none;">
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
        <div class="d-flex justify-content-end mt-3">
          {!! $pedidos->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

