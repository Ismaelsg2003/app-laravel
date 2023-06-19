@extends('layouts/template')

@section('title', 'Nuevo producto')

@section('content')

@auth

<form action="{{ url('/productos') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}" >
    </div>

    @error('nombre')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <br>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control" value="{{old('precio')}}" >
    </div>

    @error('precio')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <br>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion')}}" >
    </div>

    @error('descripcion')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <br>
    <div class="mb-3">
        <label for="categoria" class="form-label">Categoria</label>
        <br>
        <select name="categoria" class="form-select">
            <option selected="true" disabled="disabled">Seleccione la categoria</option>
            <option value="TrenSuperior">Tren Superior</option>
            <option value="TrenInferior">Tren Inferior</option>
            <option value="CuerpoCompleto">Cuerpo Completo</option>
            <option value="Accesorios">Accesorios</option>
        </select>
    </div>

    @error('categoria')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <br>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="text" name="imagen" id="imagen" class="form-control" placeholder="Indica una url de la imagen deseada" value="{{old('imagen')}}">
    </div>
    @error('imagen')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <br>
    <button type="submit" class="btn btn-primary" style="float:right; background-color: orange; height:8%; width:10%">Guardar</button>
</form>

@else

<!DOCTYPE html>
<html lang="en">

<body>
  <div class="error-message">
    <div class="alert alert-warning" role="alert" style="font-size: xx-large; text-align:center">ERROR</div>
    <div class="alert alert-danger" role="alert" style="font-size: x-large; text-align:center">Debes iniciar sesion para usar esta funcion</div>
  </div>
</body>

</html>

@endauth

@endsection