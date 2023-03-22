@extends('adminlte::page')

@section('template_title')
    {{ $venta->name ?? 'Show Venta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $venta->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Impuesto:</strong>
                            {{ $venta->impuesto }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $venta->total }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $venta->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $venta->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $venta->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
