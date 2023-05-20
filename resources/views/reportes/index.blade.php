@extends('adminlte::page')

@section('template_title')
    Create Proveedore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Proveedore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('reportes.generar') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Fecha Inicial</label>
                                            <input type="date" name="fechaini" id="fechaini" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Fecha Final</label>
                                            <input type="date" name="fechafin" id="nom_cliente" class="form-control"  required>
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <div>
                                        <input type="submit">
                                    </div>
                                </div>
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
