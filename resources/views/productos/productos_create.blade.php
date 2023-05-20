@extends('adminlte::page')

@section("titulo", "Agregar producto")
@section("content")
    <div class="row">
        <div class="col-12">
            <h1>Agregar producto</h1>
            <form method="POST" action="{{route("consumibles.store")}}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="label">Código de barras</label>
                    <input required autocomplete="off" name="codigo" class="form-control"
                           type="text" placeholder="Código de barras">
                </div>
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="nombre">
                </div>
                <div class="form-group">
                    <label class="label">Descripción</label>
                    <input required autocomplete="off" name="descripcion" class="form-control"
                           type="text" placeholder="Descripción">
                </div>
            
                <div class="form-group">
                    <label class="label">Precio de venta</label>
                    <input required autocomplete="off" name="precio" class="form-control"
                           type="decimal(9,2)" placeholder="Precio">
                </div>
                <div class="form-group">
                    <label class="label">Existencia</label>
                    <input required autocomplete="off" name="existencia" class="form-control"
                           type="decimal(9,2)" placeholder="Existencia">
                </div>
                <!-- For demo purpose -->



            <div class="row py-4">
                <div class="col-lg-6 mx-auto">

                    <!-- image_path image_path input-->
                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                        <input id="image_path"  name="image_path" type="file" onchange="readURL(this);" class="form-control border-0">
                        <label id="image_path-label" for="image_path" class="font-weight-light text-muted">Seleccionar archivo</label>
                        <div class="input-group-append">
                            <label for="image_path" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-image_path mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Seleccionar archivo</small></label>
                        </div>
                    </div>

                    <!-- image_pathed image_path area-->
                    <p class="font-italic text-white text-center">The image_path image_pathed will be rendered inside the box below.</p>
                    <div class="image_path-area mt-4"><img id="image_pathResult" src="" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

                </div>
            </div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("consumibles.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection
<style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
#image_path {
    opacity: 0;
}

#image_path-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image_path-area {
    border: 2px dashed rgba(255, 255, 255, 0.7);
    padding: 1rem;
    position: relative;
}

.image_path-area::before {
    content: 'image_pathed image_path result';
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image_path-area img {
    z-index: 2;
    position: relative;
}

/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
body {
    min-height: 100vh;
    background-color: #757f9a;
    background-image_path: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);
}

/*
</style>
<script>
    /*  ==========================================
    SHOW image_pathED image_path
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image_pathResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#image_path').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW image_pathED image_path NAME
* ========================================== */
var input = document.getElementById( 'image_path' );
var infoArea = document.getElementById( 'image_path-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}

</script>
