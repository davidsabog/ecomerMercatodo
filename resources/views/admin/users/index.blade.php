@extends('layouts.adm_layout')


    @section('content')

    <div class="row py-lg-2">
        <div class="col-md-6">
            <h2>Esta es la lista de usuarios</h2>
        </div>
        <div class="col-md-6">
            <a href="/users/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Crear Nuevo Usuario</a>
        </div>
    </div>


    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tabla de usuarios</div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $user)
                    @if(!\Auth::user()->hasRole('admin') && $user->hasRole('admin')) @continue; @endif
                    <tr {{ Auth::user()->id == $user->id ? 'bgcolor=#ddd' : '' }}>
                        <td>{{$user['id']}}</td>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>
                            @if ($user->roles->isNotEmpty())
                                @foreach ($user->roles as $role)
                                    <span class="badge badge-secondary">
                                        {{ $role->name }}
                                    </span>
                                @endforeach
                            @endif

                        </td>
                        <td>
                            @if ($user->permissions->isNotEmpty())

                                @foreach ($user->permissions as $permission)
                                    <span class="badge badge-secondary">
                                        {{ $permission->name }}
                                    </span>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <a href="/users/{{ $user['id'] }}"><i class="fas fa-eye"></i></a>
                            <a href="/users/{{ $user['id'] }}/edit"><i class="fas fa-cogs"></i></a>
                            <a href="#" data-toggle="modal" data-target="#deleteModal" data-userid="{{$user['id']}}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <!-- delete Modal-->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Estas seguro de borrar este usuario?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">Selecciona "Borrar" si realmente quieres borrar este usuario.</div>
                    <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <form method="POST" action="">
                        @method('DELETE')
                        @csrf
                        {{-- <input type="hidden" id="user_id" name="user_id" value=""> --}}
                        <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Borrar</a>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    @section('js_user_page')

    <script src="/vendor/chart.js/Chart.min.js"></script>
    <script src="/js/admin/demo/chart-area-demo.js"></script>

        <script>
            $('#deleteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var user_id = button.data('userid')
                var modal = $(this)
                // modal.find('.modal-footer #user_id').val(user_id)
                modal.find('form').attr('action','/users/' + user_id);
            })
        </script>

    @endsection

    @endsection
