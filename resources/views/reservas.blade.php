@extends('layouts.app')

@section('title', 'Home')


@section('content')

<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                

                <div class="row row-mt-15em">
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <h1>HAGA SU RESERVA</h1>	
                    </div>
                    <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                        <div class="form-wrap">
                            <div class="tab">
                                
                                <div class="tab-content">
                                    <div class="tab-content-inner active" data-content="signup">
                                        <h3>Reserva</h3>

                                        <form action="datos.php" method="POST" >
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="fullname">Tu nombre</label>
                                                    <input type="text" name="nombre" id="fullname" class="form-control" required="">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="fullname">edad</label>
                                                    <input type="number" name="edad" id="fullname" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="destination">Tipo de reserva </label>
                                                    <select name="Tipodereserva" id="destination" class="form-control" required="">
                                                        <option value="local">Local</option>
                                                        <option value="puesto">Puesto</option>
                                                        <option value="comprapormayor">Compra por mayor</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="destination">Ciudad</label>
                                                    <select name="ciudad" id="destination" class="form-control" required="">
                                                        <option value="sincelejo">sincelejo</option>
                                                        <option value="corozal">corozal</option>
                                                        <option value="betulia">betulia</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="date-start">Fecha de Reserva(d/M/A)</label>
                                                    <input type="text" name="fecha" id="date-start" class="form-control" ">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-primary btn-block" value="submit">
                                                </div>
                                            </div>
                                        </form>	
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                
            </div>
        </div>
    </div>
</header>

@stop