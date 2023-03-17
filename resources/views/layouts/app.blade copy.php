<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calibrasas</title>
    <link rel="icon" href="img/restaurant.png">
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href={{ url('css/app.css') }}>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      
</head>
<body>
    
    <header class="header-area" style="margin-bottom: 4em">
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.php"><img src="img/LOGO AGR.png" alt="" style="width: 210px; height: 80px; margin-bottom: 10px;"></a>
                            </div>
                            <div class="login-content">
                                <a href="login">Login</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="academyNav">
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul>
                                    <li><a href="/">Inicio</a></li>
                                    <li><a href="nosotros">Nosotros</a></li>
                                    <li><a href="menu">Menu</a>
                                        <!--<div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">#</a></li>
                                                <li><a href="#"># &amp; #</a></li>
                                                <li><a href="#">#</a></li>
                                                <li><a href="#">#</a></li>
                                                <li><a href="#">#</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">#</a></li>
                                                <li><a href="#"># &amp;#</a></li>
                                                <li><a href="#">#</a></li>
                                                <li><a href="#">#</a></li>
                                                <li><a href="#">#</a></li>
                                            </ul>
                                        </div>-->
                                    </li>
                                    <li><a href="reservas">Reservas</a></li><li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle"
                                           href="#" role="button" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"
                                        >
                                            <span class="badge badge-pill badge-dark">
                                                <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                                            </span>
                                        </a>
                    
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                                            <ul class="list-group" style="margin: 20px;">
                                                @include('partials.cart-drop')
                                            </ul>
                    
                                        </div>
                                    </li>                                </ul>



                            </div>
                        </div>
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+573196025938"><i class="icon-telephone-2"></i> <span>(+57) 319 602 5938</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    @yield('content')

    @show
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container" style="margin-left: 30%;">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="img/LOGO AGR.png" alt=""></a>
                            </div>
                            <p></p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contacto</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Cr 67 #3 45B sur</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Fijo: 345 6788 <br>Oficina: 312 345 6789</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>calibrasas@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>