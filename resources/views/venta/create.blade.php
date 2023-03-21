@extends('adminlte::page')

@section('template_title')
    Create Venta
@endsection

@section('content')


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><!--Modal title--></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        @includeif('partials.errors')

                        <div class="card card-default">
                            <div class="card-header">
                                <span class="card-title">Create Cliente</span>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf

                                    <div class="box box-info padding-1">
                                        <div class="box-body">


                                            <div class="form-group">
                                                <strong>documento:</strong>
                                                <input type="text" name="documento"  class="form-control" placeholder="documento">
                                                {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <div class="form-group">
                                                <strong>nombre:</strong>
                                                <input type="text" name="nombre"  class="form-control" placeholder="nombre">
                                                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <div class="form-group">
                                                <strong>apellido:</strong>
                                                <input type="text" name="apellido"  class="form-control" placeholder="apellido">
                                                {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <div class="form-group">
                                                <strong>telefono:</strong>
                                                <input type="text" name="telefono"  class="form-control" placeholder="telefono">
                                                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <div class="form-group">
                                                <strong>email:</strong>
                                                <input type="text" name="correo_electronico"  class="form-control" placeholder="correo_electronico">
                                                {!! $errors->first('correo_electronico', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <input type="hidden" name="validar" value="12314522">

                                        </div>
                                        <div class="box-footer mt20">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Venta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ventas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('venta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>$('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })</script>
      <script>
        $('#search').on('keyup', function() {
            var query = $(this).val();
            $.ajax({
                url: "{{ route('ventas.store') }}",
                method: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'query': query
                },
                success: function(data) {
                    $('#results').html(data);
                }
            });
        });
    </script>
@endsection

