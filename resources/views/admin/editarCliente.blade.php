	@extends('admin.layout.main')
@section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Editar Cliente</h4>
                </div>
                <div class="card-body">
                  <form method="post" action="{{'/admin/usuarios/'.$usuario->id.'/update'}}">
                    @csrf
                      @method('put')
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{$usuario->nombre}}</label>
                          <input type="text" name="nombre" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{$usuario->apellido}}</label>
                          <input type="text" name="apellido" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{$usuario->membresia_id}}</label>
                          <input type="text" name="membresia_id" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{$usuario->email}}</label>
                          <input type="email" name="correo" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{$usuario->activo}}</label>
                          <input type="text" name="activo" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Actualizar información </button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     @endsection