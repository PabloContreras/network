@extends('admin.layout.main')
@section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Editar Información</h4>
                </div>
                <div class="card-body">
                  <form  method="POST" action="{{ '/admin/'.$admin->id.'/update'}}">
                    @csrf
                      @method('put')
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{$admin->name}} </label>
                          <input type="text" name="nombre" class="form-control" >
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{$admin->empresa}}</label>
                          <input type="text" name="empresa" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{$admin->email}}</label>
                          <input type="email" name="correo" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     @endsection