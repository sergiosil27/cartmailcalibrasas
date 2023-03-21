@extends('adminlte::page')

@section('template_title')
    Create Plato
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Plato</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('platos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('plato.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
