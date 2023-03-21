@extends('adminlte::page')

@section('template_title')
    {{ $plato->name ?? 'Show Plato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Plato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('platos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $plato->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $plato->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $plato->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Image Path:</strong>
                            {{ $plato->image_path }}
                        </div>
                        <div class="row py-4">
                            <div class="col-lg-4 mx-auto">

                                <!-- image_pathed image_path area-->
                                <p class="font-italic text-white text-center">The image_path image_pathed will be rendered inside the box below.</p>
                                <div class="image_path-area mt-4"><img id="image_pathResult" src="/images/platos/{{ $plato->image_path }}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
