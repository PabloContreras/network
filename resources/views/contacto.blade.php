@extends('layouts.main')
@section('content')

<!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/drone.jpg);">
        <div class="bradcumbContent">
            <h2>Contacto</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Form Area Start ##### -->
    <section class="contact-form-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <div class="line-"></div>
                        <h2>Escríbenos</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Contact Form -->
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="text" placeholder="Nombre">
                            </div>
                            <div class="col-md-4">
                                <input type="email" class="form-control" name="email" placeholder="E-mail">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="subject" placeholder="Titulo del mensaje">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn palatin-btn mt-50">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Form Area End ##### -->

    <!-- ##### Google Maps ##### -->
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.059757618776!2d-99.610092684614!3d19.27976735054475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8a4623d0ed53%3A0x9635e1fdaf2c7231!2sAv.+Ignacio+Comonfort+107%2C+Delegaci%C3%B3n+Sta+Ana+Tlapaltitl%C3%A1n%2C+50160+Toluca+de+Lerdo%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1540964359605" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection