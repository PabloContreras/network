@extends('layouts.main')
@section('content')
	<!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(/img/bg-img/2.png);">
        <div class="bradcumbContent text-center">
            <h2>Regístrate</h2>
            <br>
            <h2>El origen de tu futuro exponencial</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->



    <!-- ##### Testimonial Area Start ##### -->
    <section class="testimonial-area section-padding-100 bg-img" style="background-image: url(/img/core-img/pattern.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-content" style="height: 604px;">
						<form class="form-horizontal" role="form" method="POST" action="{{ url('/cliente/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">Nombre</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">E-Mail</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-12 control-label">Confirma Password</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarme
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="testimonial-content" style="height: 604px;">
                    <center>Nerwork Coworking te invita a la conferencia<br> <br><strong>El origen de tu futuro exponencial</strong><br> impartido por el <br><br><br><br><strong>Couch Luis García.</strong><br><br><br><br>
                    Esta conferencia busca lograr que reflexiones sobre condiciones del mercado laboral actual, cuestiones tus preferencias, encuentres tu pasión y transformes tu vida.</center>
                    </div> 
                </div>   
            </div>
        </div>
    </section>
@endsection