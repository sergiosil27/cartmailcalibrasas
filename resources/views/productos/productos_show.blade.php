@extends('adminlte::page')

@section('template_title')
    {{ $producto->name ?? 'Show producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consumibles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $producto->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de venta:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Existencia:</strong>
                            {{ $producto->existencia }}
                        </div>
                        <div class="form-group">
                            <strong>Image Path:</strong>
                            {{ $producto->image_path }}
                        </div>
                        <div class="row py-4">
                            <div class="col-lg-4 mx-auto">

                                <!-- image_pathed image_path area-->
                                <p class="font-italic text-white text-center">The image_path image_pathed will be rendered inside the box below.</p>
                                <div class="image_path-area mt-4"><img id="image_pathResult" src="/images/platos/{{ $producto->image_path }}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
