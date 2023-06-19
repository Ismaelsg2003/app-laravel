@extends('layouts/template')

@section('title', 'Inicio de sesion')

@section('content')

<!DOCTYPE html>
<html>
  <body>
    <style>
        form {
        margin: 20px auto;
        width: 300px;
        height: 400px;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 30px black;
        }
        #formulario{
        margin-top: 10%;
        }
        h2 {
        text-align: center;
        }
        label {
        display: block;
        margin-bottom: 10px;
        }
        #invitado{
        color: orange;
        }
        #invitado:hover{
        color: orangered;
        }
        input[type="text"],
        input[type="password"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"] {
        background-color: orange;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }
        input[type="submit"]:hover {
        background-color: orangered;
        }
    </style>

    <div id="formulario">
      <form action="\app-laravel\public\iniciosesion" method="post">
      @csrf
        @if(session('error'))
            <div class="alert alert-warning" style="text-align: center;" role="alert">
            {{session('error')}}
            </div>    
        @endif

        <h2>Inicio de Sesión</h2>
        <br>
        <label>
            <input  type="email" name="email" placeholder="Introduce tu email" class="form-control">
        </label>
        <br>
        <label>
            <input type="password" name="password" placeholder="Introduce tu contrasena" class="form-control">
        </label>
        <br>

        <div style="text-align: center;">
        <input type="submit" value="Iniciar Sesion" name="iniciarsesion"><br><br>
        </div>
      </form>
    </div>
  </body>
</html>

@endsection