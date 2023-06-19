@extends('layouts/template')

@section('title', 'Editar producto')

@section('content')

@auth 

<h2>EDITAR PRODUCTO</h2>
<br>

<form action="{{route('productos.update', $producto)}}" method="post">
    @method("PUT")    
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre',$producto->nombre) }}">
    </div>
    
    @error('nombre')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control" value="{{ old('precio', $producto->precio) }}">
    </div>

    @error('precio')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ old('descripcion', $producto->descripcion) }}">
    </div>

    @error('descripcion')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

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

    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="text" name="imagen" id="imagen" class="form-control" value="{{ old('imagen',$producto->imagen) }}">
    </div>

    @error('imagen')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <button type="submit" class="btn btn-primary" style="float:right">Guardar</button>
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