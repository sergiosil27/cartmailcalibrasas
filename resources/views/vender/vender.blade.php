@extends('adminlte::page')

@section("titulo", "Realizar venta")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vender') }}
                            </span>


                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{route("terminarOCancelarVenta")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="id_cliente">Cliente</label>
                                <select required class="form-control" name="id_cliente" id="id_cliente">
                                    @foreach($clientes as $cliente)
                                        <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if(session("productos") !== null)
                                <div class="form-group">
                                    <button name="accion" value="terminar" type="submit" class="btn btn-success">Terminar
                                        venta
                                    </button>
                                    <button name="accion" value="cancelar" type="submit" class="btn btn-danger">Cancelar
                                        venta
                                    </button>
                                </div>
                            @endif
                        </form>
                    </div>
                    <div class="col-12 col-md-6">
                        <form action="{{route("agregarProductoVenta")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="codigo">Código de barras</label>
                                <input id="codigo" autocomplete="off" required autofocus name="codigo" type="text"
                                       class="form-control"
                                       placeholder="Código de barras">
                            </div>
                        </form>
                    </div>
                </div>
                @if(session("productos") !== null)
                    <h2>Total: ${{number_format($total, 2)}}</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Código de barras</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Quitar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(session("productos") as $producto)
                                <tr>
                                    <td>{{$producto->codigo_barras}}</td>
                                    <td>{{$producto->descripcion}}</td>
                                    <td>${{number_format($producto->precio_venta, 2)}}</td>
                                    <td>{{$producto->cantidad}}</td>
                                    <td>
                                        <form action="{{route("quitarProductoDeVenta")}}" method="post">
                                            @method("delete")
                                            @csrf
                                            <input type="hidden" name="indice" value="{{$loop->index}}">
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <h2>
                        <br>
                        Escanea el código de barras o escribe y presiona Enter</h2>
                @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    <select class="js-example-theme-single">
    <option value="one">First</option>
    <option value="two">Second (disabled)</option>
    <option value="three">Third</option>
  </select>
@endsection


@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(".js-example-theme-single").select2({
});
</script>
@stop
