@extends('adminlte::page')

@section("titulo", "Ventas")
@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Ventas') }}
                        </span>

                         <div class="float-right">
                            <a href="{{ route('vender.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Registrar Venta') }}
                            </a>
                          </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Codigo Venta</th>
                        <th>Fecha</th>
                        <th>ID_Cliente</th>
                        <th>Cliente</th>
                        <th>Total</th>
                        <th>Ticket de venta</th>
                        <th>Detalles</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php echo ($ventas) ?>
                    @foreach($ventas as $venta)
                        <tr>
                            <td>{{$venta->id}}</td>
                            <td>{{$venta->created_at}}</td>
                            <td>{{$venta->documento}}</td>
                            <td>{{$venta->nombres." ".$venta->apellidos}}</td>
                            <td>${{number_format($venta->total, 2)}}</td>
                            <td>
                                <a class="btn btn-info" href="{{route("ventas.ticket", ["id"=>$venta->id])}}">
                                    <i class="fa fa-print"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{route("ventas.show", [$venta])}}">
                                    <i class="fa fa-info"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("ventas.destroy", [$venta])}}" method="post">
                                    @method("delete")
                                    @csrf
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
