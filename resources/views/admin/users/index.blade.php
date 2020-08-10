@extends('layouts.adm_layout')




@section('content')
<div class="container">
    <h2>Lista De Usuarios Registrados <a href="admin/create  "><button type="button" class="btn btn-success float-right">Agregar Usuario</button></a></h2>
        <table class="table table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">EMAIL</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
            <th scope="row">{{$user->id}}</th>
            <td colspan="2">{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('admin.edit', $user->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>

            </tr>
            @endforeach
        </tbody>
        </table>
</div>

@endsection
