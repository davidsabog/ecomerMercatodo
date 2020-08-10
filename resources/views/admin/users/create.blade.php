@extends('layouts.adm_layout')


@section('content')
<div class="row">
    <div class="col-sm-5">
        <h3>Crear un Nuevo Usuario</h3>

        <form action="/admin" method="POST">
            @csrf
            <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="Escribe tu nombre">
            </div>
            <div class="form-group">
            <label for="email">Direccion Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Escrube tu Email">
            <small id="emailHelp" class="form-text text-muted">Numca compartas tus datos con nadie</small>
            </div>
            <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" name="password" placeholder="Escribe tu contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>

        </form>
    </div>
</div>
@endsection
