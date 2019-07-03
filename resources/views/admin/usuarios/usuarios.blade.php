    @extends('admin.layout.main')

@section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Usuarios</h4>
                  <p class="card-category">Información General</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nombre
                        </th>
                        <th>
                          Apellido
                        </th>
                        <th>
                          Activo
                        </th>
                        <th>
                          Membresia_id
                        </th>
                        <th>
                          Correo
                        </th>
                      </thead>
                      <tbody>
                        @foreach($usuarios as $usuario)
                          <tr>
                             <td>
                               {{ $usuario->id }}
                             </td>
                             <td >
                               {{ $usuario->nombre }}
                             </td>
                            <td >
                              {{ $usuario->apellido }}
                            </td>
                            <td >
                              {{ $usuario->membresia_id }}
                            </td>
                            <td >
                              {{ $usuario->email }}
                            </td>
                            <td >
                              {{ $usuario->activo }}
                            </td>


                            <td>
                              <form action="{{ '/admin/usuarios/'.$usuario->id.'/eliminar' }}" method="post" >
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <button type="submit" rel="tooltip" title="Eliminar Usuario" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                              </form>
                            </td>
                            <td>
                              <form action="{{url('/admin/usuarios/'.$usuario->id.'/actualizar')}}">
                                {{ csrf_field() }}
                                <button type="submit" rel="tooltip" title="Editar Usuario" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              </form>
                            </td>
                            <td>
                              <form action="{{url('/admin/usuarios/'.$usuario->id.'/ver')}}" method="post" >
                                {{ csrf_field() }}
                                <button type="submit" rel="tooltip" title="Ver usuario" class="btn btn-primary btn-link">
                                  <i class="material-icons">face</i>
                                </button>
                              </form>
                            </td>
                         </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     @endsection