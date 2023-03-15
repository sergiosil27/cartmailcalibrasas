@extends('layouts.app')

@section('title', 'Home')


@section('content')
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <div class="single-hero-slide bg-img" style="background-image: url(img/local.jpeg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">Aqui encontraras lo que necesitas</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenido a<br>Calibrasas</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-slide bg-img" style="background-image: url(img/local1.jpeg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">Aqui encontraras lo que nesecitas</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenido a<br>Calibrasas</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-content">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-agenda-1"></i>
                                <h5>Pide sin filas</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-assistance"></i>
                                <h5>Clientes satisfechos</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-telephone-3"></i>
                                <h5>Servicio Domicilio</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="Agri-Col-Store-area section-padding-100-0">
    <div class="container">
        <div class="row">
            
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                    <div class="course-icon">
                        <i class="icon-worldwide"></i>
                    </div>
                    <div class="course-content">
                        <h4>Alcance</h4>
                        <p>Domicilios en todo Corozal.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                    <div class="course-icon">
                        <i class="icon-like"></i>
                    </div>
                    <div class="course-content">
                        <h4>Redes Sociales</h4>
                        <p>Visita nuestras redes sociales.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="course-icon">
                        <i class="icon-responsive"></i>
                    </div>
                    <div class="course-content">
                        <h4>MENU</h4>
                        <p>Menu variado con todo lo que buscas.</p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            
        </div>
    </div>
</div>

            <div class="col-12 col-md-6">
                <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                   
                   
                </div>
            </div>                
        </div>
        
    </div>
</div>

<div class="patrocinadores-area section-padding-0-100" style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                    <a href="#"><img src="https://somosunhit.com/wp-content/themes/customTheme/img/brands/hit.png" alt=""></a>
                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Coca-Cola_logo.svg" alt=""></a>
                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Pepsi_logo_2008.svg/800px-Pepsi_logo_2008.svg.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop