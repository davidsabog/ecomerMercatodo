@extends('layouts.adm_layout')




@section('content')
<div class="container">
<table class="table table">
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