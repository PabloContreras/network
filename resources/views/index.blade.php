
@extends('layouts.main')
@section('content')
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/2.png);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms" style="height: 624px;">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Cómo entender al nuevo consumidor digital</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Conferencia por Eduardo Vivar.</p>
                                <footer class="form-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-12">
                                                <div class="footer-widget-area mt-50">
                                                    <form action="#" method="post" class="subscribe-form">
                                                        <!--<input type="email" name="subscribe-email" id="subscribeemail" placeholder="Tu E-mail">-->
                                                        <a href="{{ url('/registro/agregar') }}"><button type="button">Reserva tu lugar</button></a>
                                                          Ver video
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->



    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="about-text text-center mb-100">
                        <div class="section-heading text-center">
                            <br><br><br><br><br>
                            <div class="line-"></div>
                            <h2>Share your passion</h2>
                        </div>
                        <p>Network Coworking es un espacio compartido de trabajo para emprender un negocio o un proyecto, facilita el lanzamiento de tu idea y te da la oportunidad de conectar con otros Networkers.</p>
                        <div class="about-key-text">
                            <h6><span class="fa fa-check"></span> Espacio de trabajo colaborativo y emprendedor</h6>
                            <h6><span class="fa fa-check"></span> Equipamiento de la más alta tecnología</h6>
                        </div>
                        <br><br><br><br><br>


                    </div>
                </div>

                <div class="col-12 col-lg-6">
                <!--Carousel Wrapper-->
                <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                  <!--Indicators-->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                  </ol>
                  <!--/.Indicators-->
                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <div class="view">
                        <img class="d-block w-100" src="img/bg-img/seccion1_1.jpg" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                      </div>

                    </div>
                    <div class="carousel-item">
                      <!--Mask color-->
                      <div class="view">
                        <img class="d-block w-100" src="img/bg-img/seccion1_2.jpg" alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                      </div>

                    </div>
                    <div class="carousel-item">
                      <!--Mask color-->
                      <div class="view">
                        <img class="d-block w-100" src="img/bg-img/seccion1_3.jpg" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                      </div>

                    </div>
                  </div>
                  <!--/.Slides-->
                  <!--Controls-->
                  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Pool Area Start ##### -->
    <section class="pool-area section-padding-100 bg-img bg-fixed" style="background-image: url(img/bg-img/4.png);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="pool-content text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="section-heading text-center white">
                            <div class="line-"></div>
                            <h2>Misión</h2>
                            <p>Nuestra misión es brindar el mejor espacio de trabajo para los Networkers integrando cómodas instalaciones con un diseño vanguardista, tecnología de punta y un ambiente empresarial en la mejor ubicación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Pool Area End ##### -->

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-100-0" id="membresia">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Membresías</h2>
                        <p>¿Qué es un net credit?, Un net credit equivale a media de uso de salas de jutas.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/seccion2_1.jpg);"></div>
                        <!-- Price -->
                        <p class="price-from">Visita</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Reserva tu visita</h4>
                                <ul>
                                    <li><p>Conoce nuestras instalaciones</p></li>
                                    <li><p>Recorre todas las aereas</p></li>
                                    <li><p>Prueba el internet de banda ancha</p></li>
                                    <li><p></p></li>
                                    <li><p></p></li>
                                    <li><p></p></li>
                                </ul>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Tour</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/seccion2_2.jpg);"></div>
                        <!-- Price -->
                        <p class="price-from">Desde $4,500/mes</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Estandard</h4>
                                <ul>
                                    <li><p>2 Net Credits</p></li>
                                    <li><p>Sin Impresiones a Color</p></li>
                                    <li><p>Sin Impresiones B/N</p></li>
                                    <li><p>Café, cerveza y té </p></li>
                                    <li><p>Acceso 24 horas</p></li>
                                    <li><p>365 días del año</p></li>
                                </ul>
                        </div>
                        <!-- Book Room -->
                        <a href="{{ route('contratar') }}" class="book-room-btn btn palatin-btn">Contratar</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="500ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/seccion2_3.jpg);"></div>
                        <!-- Price -->
                        <p class="price-from">Desde $5,100/mes</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Gold</h4>
                                <ul>
                                    <li><p>5 Net Credits</p></li>
                                    <li><p>50 Impresiones a Color</p></li>
                                    <li><p>10 Impresiones B/N</p></li>
                                    <li><p>Café, cerveza y té </p></li>
                                    <li><p>Acceso 24 horas</p></li>
                                    <li><p>365 días del año</p></li>
                                </ul>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Contratar</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Rooms Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area d-flex flex-wrap align-items-center">
        <div class="home-map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.059757618776!2d-99.610092684614!3d19.27976735054475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8a4623d0ed53%3A0x9635e1fdaf2c7231!2sAv.+Ignacio+Comonfort+107%2C+Delegaci%C3%B3n+Sta+Ana+Tlapaltitl%C3%A1n%2C+50160+Toluca+de+Lerdo%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1540964359605" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Info -->
        <div class="contact-info">
            <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                <div class="line-"></div>
                <h2>Información de Contacto</h2>
            </div>
            <h4 class="wow fadeInUp" data-wow-delay="300ms"><strong>Centro de Negocios Toluca</strong>.<br><br>Ignacio Comofort 107,<br>Primer piso.<br>Toluca Estado de México</h4>
            <h5 class="wow fadeInUp" data-wow-delay="400ms"><strong>Teléfono:</strong> +52 722 917 18 63</h5>
            <h5 class="wow fadeInUp" data-wow-delay="500ms"><strong>Email:</strong>  contacto@networkcoworking.com</h5>
            <!-- Social Info -->
            <div class="social-info mt-50 wow fadeInUp" data-wow-delay="600ms">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <!-- Video -->
    <div class="container">
    <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection