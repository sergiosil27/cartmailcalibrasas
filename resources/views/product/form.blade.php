<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <strong>nombre:</strong>
            <input type="text" name="nombre" value="{{ $product->nombre }}" class="form-control" placeholder="nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <strong>detalle:</strong>
            <input type="text" name="detalle" value="{{ $product->detalle }}" class="form-control" placeholder="detalle">
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <strong>precio:</strong>
            <input type="text" name="precio" value="{{ $product->precio }}" class="form-control" placeholder="precio">
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @isset($proveedores)
        <div class="form-group">
            <strong>proveedor_id:</strong>
            <select name="proveedor_id" class="form-control">
                @foreach ($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}" >
                        {{ $proveedor->nombre }}
                    </option>
                @endforeach
            </select>
            <!--<input type="text" name="proveedor_id" value="{{ $product->proveedor_id }}" class="form-control" placeholder="proveedor_id">-->
            {!! $errors->first('proveedor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endisset
        @empty($proveedores)
        <div class="form-group">
        <input type="text" readonly="readonly"  name="proveedor_id" value="{{ $product->nombre }}" class="form-control" placeholder="proveedor_id">
        </div>
        @endempty

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
