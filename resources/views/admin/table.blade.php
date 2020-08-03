@extends('layouts.adm_layout')




@section('content')

<div class=" container-fluid">
    <br>
<h2>Lista de Usuarios Registrados <a href="{{route('admin.create')}}"><button type="button" class="btn btn-success float-right">Agregar Usuario</button></a> </h2>
    <br>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">EMAIL</th>

    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td colspan="2">{{$user->name}}</td>
      <td>{{$user->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
