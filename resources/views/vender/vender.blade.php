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
                    <!--modal-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">

                                <div class="row justify-content-center">
                                    @foreach($productos as $producto)
                                    <div class="col-md-4">
                                        <div class="radio-group row justify-content-between px-3 text-center a">
                                            <div class="col-auto mr-sm-2 mx-1 card-block  py-0 text-center radio selected ">
                                                <div class="flex-row">
                                                    <div class="col">
                                                        <div class="pic"> <img class="irc_mut img-fluid" src="/images/platos/{{$producto->image_path}}" width="100" height="100"> </div>
                                                        <p>{{$producto->descripcion}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Seleccionar</button>
                        </div>
                        </div>
                    </div>
                    </div>
                                        <!--modal-->

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
<style>
    body {
    letter-spacing: 0.7px;
    background-color: #eee;
}

.container {
    margin-top: 100px;
    margin-bottom: 100px;
}

p {
    font-size: 14px;
}

.btn-primary{
    background-color: #42A5F5 !important;
    border-color: #42A5F5 !important;
}

.cursor-pointer {
    cursor: pointer;
    color: #42A5F5;
}

.pic {
    margin-top: 30px;
    margin-bottom: 20px;
}

.card-block {
    width: 200px;
    border: 1px solid lightgrey;
    border-radius: 5px !important;
    background-color: #FAFAFA;
    margin-bottom: 30px;
}

.card-body.show {
    display: block;
}

.card {
    padding-bottom: 20px;
    box-shadow: 2px 2px 6px 0px rgb(200, 167, 216);
}

.radio {
    display: inline-block;
    border-radius: 0;
    box-sizing: border-box;
    cursor: pointer;
    color: #000;
    font-weight: 500;
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    filter: grayscale(100%);
}


.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1);
}

.radio.selected {
    box-shadow: 0px 8px 16px 0px #EEEEEE;
    -webkit-filter: grayscale(0%);
    -moz-filter: grayscale(0%);
    -o-filter: grayscale(0%);
    -ms-filter: grayscale(0%);
    filter: grayscale(0%);
}

.selected {
    background-color: #E0F2F1;
}

.a {
    justify-content: center !important;
}


.btn {
    border-radius: 0px;
}

.btn,
.btn:focus,
.btn:active {
    outline: none !important;
    box-shadow: none !important;
}
</style>
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(".js-example-theme-single").select2({
});
</script>
<script>
    $(document).ready(function () {
    $('.radio-group .radio').click(function () {
        $('.selected .fa').removeClass('fa-check');
        $('.radio').removeClass('selected');
        $(this).addClass('selected');
    });
});
</script>
@stop
