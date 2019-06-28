<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Network Coworking | {{$titulo}}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico')}}">
    <link href="{{ asset('css/css/bootstrap.min.css')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Font Awasome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>


        .modal-dialog {
          max-width: 800px;
          margin: 30px auto;
      }



      .modal-body {
          position:relative;
          padding:0px;
      }
      .close {
          position:absolute;
          right:-30px;
          top:0;
          z-index:999;
          font-size:2rem;
          font-weight: normal;
          color:#fff;
          opacity:1;
      }
  </style>
  @yield('links')
</head>



<body>

    <!-- Preloader
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>-->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="palatinNav">

                        <!-- Nav brand -->
                        <a href="{{ url('inicio') }}" class="nav-brand"><img src="{{asset('img/core-img/logo.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li {{Request::getPathInfo()  == '/about' ? ' class=active' : '' }}> <a href="{{ url('about') }}">Acerca de</a></li>
                                    <li {{Request::getPathInfo()  == '/servicios' ? ' class=active' : '' }}><a href="{{ url('servicios') }}">Servicios</a></li>
                                    <li><a href="#">Alianzas</a>
                                        <div class="megamenu" style="height: 300px; text-align:center;">
                                            <ul class="single-mega cn-col-5" style="height: 250px">
                                                <li><a href="http://ibctoluca.com/ibc/public/index.php" target="_blank"><img src="{{ asset('img/img-menu/01.png')}}"></a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-5" style="height: 250px">
                                                <li style="height: 250px"><a href="https://www.centrodenegociostoluca.com.mx/" target="_blank"><img src="{{ asset('img/img-menu/02.png')}}"></a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-5" style="height: 250px">
                                                <li><a href="https://www.facebook.com/RegginaToluca/" target="_blank"><img src="{{ asset('img/img-menu/03.png')}}"></a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-5" style="height: 250px">
                                                <li><a href="http://eostechnology.com.mx" target="_blank"><img src="{{ asset('img/img-menu/04.png')}}"></a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-5" style="height: 250px">
                                                <li><a href="https://www.facebook.com/Oh-lal%C3%A1-Hair-Salon-Metepec-347235112046333/" target="_blank"><img src="{{ asset('img/img-menu/05.png')}}"></a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <!--<li><a href="#membresia">Membresías</a></li>-->
                                    <li {{Request::getPathInfo()  == '/contacto' ? ' class=active' : '' }}><a href="{{ url('contacto') }}">Contacto</a></li>
                                </ul>

                                <!-- Button -->
                                <div class="menu-btn">
                                    <a href="#" class="btn palatin-btn">RESERVA UNA VISITA</a>
                                </div>
                                {{--<div class="menu-btn">
                                   <a href="{{ url('cliente/login') }}"><i class="fas fa-user-alt"></i></a>
                               </div>--}}
                               <div class="menu-btn">
                                @if (Auth::user())

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="fas fa-user-alt"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" style="height: 48px;">
                                        <li>
                                            <a href="{{ url('/cliente/logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" style="color: black;">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/cliente/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <a href="{{ url('cliente/login') }}"><i class="fas fa-user-alt"></i></a>
                            @endif
                        </div>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
</header>

@yield('content')


<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">

            <!-- Footer Widget Area -->
            <div class="col-12 col-lg-5">
                <div class="footer-widget-area mt-50">
                    <a href="#" class="d-block mb-5"><img src="/img/core-img/logo.png" alt=""></a>
                    <h6 class="widget-title mb-5" style="text-align: justify">
                        Network Coworking es un espacio de trabajo colaborativo e innovador que ofrece servicios de excelencia en renta de espacios de trabajo, que cuenta con todo lo que necesita un profesional independiente, nómada digital y emprendedor: instalaciones elegantes y equipamiento de la más alta tecnología.
                    </h6>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="footer-widget-area mt-50">
                    <h6 class="widget-title mb-5">Encuéntranos en el mapa</h6>
                    <img src="/img/bg-img/footer-map.png" alt="">
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-widget-area mt-50">
                    <h6 class="widget-title mb-5">Suscríbete a nuestro boletín</h6>
                    <form action="#" method="post" class="subscribe-form">
                        <input type="email" name="subscribe-email" id="subscribeemail" placeholder="Tu E-mail">
                        <button type="submit">Suscríbete</button>
                    </form>
                </div>
            </div>

            <!-- Copywrite Text -->
            <div class="col-12">
                <div class="copywrite-text mt-30">
                    <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Desarrollado <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">EOS</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js
        <script src="js/jquery/jquery-2.2.4.min.js"></script>-->
        <script src="{{ asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js
        <script src="js/bootstrap/popper.min.js"></script>-->
        <script src="{{ asset('js/bootstrap/popper.min.js')}}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('js/bootstrap/bootstrap.min.js')}}"></script>
        <!-- All Plugins js -->
        <script src="{{ asset('js/plugins/plugins.js')}}"></script>
        <!-- Active js -->
        <script src="{{ asset('js/active.js')}}"></script>

        <script type="text/javascript">
            $(document).ready(function() {

    // Gets the video src from the data-src on each button

    var $videoSrc;
    $('.video-btn').click(function() {
        $videoSrc = $(this).data( "src" );
    });
    console.log($videoSrc);



    // when the modal is opened autoplay it
    $('#myModal').on('shown.bs.modal', function (e) {

    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" );
})


    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src',$videoSrc);
    })
});



</script>
@yield('scripts')
</body>

</html>

