@extends('layouts.app')



@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td colspan="2">{{$user->name}}</td>
        <td>{{$user->email}}r</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection


