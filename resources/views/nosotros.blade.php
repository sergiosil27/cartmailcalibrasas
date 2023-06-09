@extends('layouts.app')

@section('title', 'Home')


@section('content')
<div class="breadcumb-area bg-img" style="background-image: url(https://i.blogs.es/34bd70/foto-apertura/1366_2000.jpg);">
  <div class="bradcumbContent">
      <h2>Nosotros</h2>
  </div>
</div>
<section class="about-us-area mt-50 section-padding-100">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                  <h3>Somos de los mejores asaderos de Corozal</h3>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
              <p>Si eres fresco, alegre, respetuoso, transparente y disfrutas lo que haces, éste es tu lugar. Requerimos auxiliares de restaurantes, domiciliarios, cajeros y administradores. Envíanos tu hoja de vida según tu ubicación de preferencia laboral: Corozal, Sincelejo, Betulia u OTROS en sucre</p>
          </div>
          <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
              <p>El Fondo de Empleados de cali brasas es una alternativa eficiente, oportuna y posible, para valorar los proyectos y enriquecer o mejorar el estilo de vida. Al vincularse con nosotros se obtiene una serie de posibilidades reales para lograr todo aquello que ha soñado para usted y los suyos.</p>
          </div>
      </div>
    
  </div>
</section>
<section class="teachers-area section-padding-0-100">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                  <h3>GRUPO DE TRABAJO</h3>
              </div>
          </div>
      </div>

      <div class="row">
          <div class="col-12 col-sm-6 col-lg-3">
              <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                  <div class="teachers-thumbnail">
                    
                  </div>
                  <div class="teachers-info mt-30">
                      <h5>JUAN CAMILO SUAREZ </h5>
                      <span>DESAROLLADOR</span>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
              <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                  <div class="teachers-thumbnail">
                  
                  </div>
                  <div class="teachers-info mt-30">
                      <h5> <a href="http://localhost/sergio/">SERGIO ANDRES SILGADO</a> </h5>
                      <span>GERENTE GENERAL</span>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
              <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                  <div class="teachers-thumbnail">
                   
                  </div>
                  <div class="teachers-info mt-30">
                      <h5>ELKIN DARIO ESCOBAR </h5>
                      <span>CORDINADOR</span>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
              <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                  <div class="teachers-thumbnail">
                   
                  </div>
                  <div class="teachers-info mt-30">
                      <h5>JEAN CARLOS SALCEDO </h5>
                      <span>INVESTIGADOR 
                      </span>
                  </div>
              </div>
          </div>
      </div>
      
  </div>
  <div class="container" style="margin-bottom: 30px">
    <h1>Formulario de contacto</h1>
    
    @if(Session::has('success'))
       <div class="alert alert-success">
         {{ Session::get('success') }}
       </div>
    @endif
    
    <form action="{{route('contactUs.contactUsPost')}}" method="POST">
      @csrf
    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name"></label>
    <input type="text" id='name' name='name' class='form-control' placeholder='enter name' required>
    <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    
    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email"></label>
    <input type="email" id='email' name='email' class='form-control' placeholder='enter email' required>
    <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>
    
    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
    <label for="message"></label>
    <textarea name="message" id="message" rows="10" class='form-control' placeholder='enter message' required></textarea>
    <span class="text-danger">{{ $errors->first('message') }}</span>
    </div>
    
    <div class="form-group">
      <input type="submit" class="btn btn-success" name='Contactanos!'>
    </div>
    </form>
    </div>
@stop