@extends('cliente.cliente')
@extends('cliente.header')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>PRODUCT</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                        <div class="order-products">
                            @foreach ($detallesCarrito as $detalleCarrito)
                                @if ($detalleCarrito->idCarrito == $carrito->id)
                                    @foreach ($productos as $producto)
                                        @if ($detalleCarrito->idProducto == $producto->id)
                                            <div class="order-col">
                                                <div>{{ $detalleCarrito->cantidad }}x {{ $producto->name }}</div>
                                                <div>{{ $detalleCarrito->precio * $detalleCarrito->cantidad }} Bs</div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                        <div class="order-col">
                            <div>Shiping</div>
                            <div><strong>150 Bs</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">{{$carrito->total + 150}} Bs</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Order Details -->
    <div class="d-table-cell align-middle">
        <div class="text-center mt-4">
            <h3 class="title">Método de pago</h3>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="m-sm-4">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                @foreach ($tiposPagos as $tipoPago)
                                    <tr>
                                        <td>{{ $tipoPago->nombre }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('pagos.show', $tipoPago->id) }}"
                                                    class="primary-btn order-submit">Pagar<i class="fa fa-check"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
