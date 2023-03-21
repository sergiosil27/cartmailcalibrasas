<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            <strong>documento:</strong>
            <input type="text" name="documento" value="{{ $cliente->documento }}" class="form-control" placeholder="documento">
            {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <strong>nombre:</strong>
            <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="form-control" placeholder="nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <strong>apellido:</strong>
            <input type="text" name="apellido" value="{{ $cliente->apellido }}" class="form-control" placeholder="apellido">
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <strong>telefono:</strong>
            <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="form-control" placeholder="telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <strong>correo_electronico:</strong>
            <input type="text" name="correo_electronico" value="{{ $cliente->correo_electronico }}" class="form-control" placeholder="correo_electronico">
            {!! $errors->first('correo_electronico', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
