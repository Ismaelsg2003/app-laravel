@extends('layouts/template')

@section('title', 'Detalles del producto')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del producto</title>
</head>
<body>
        
 @if(session('success'))
    <div class="alert alert-success" style="text-align: center;" role="alert">
    {{session('success')}}
    </div>    
 @endif
 
    <div id="der" style="width: 50%; float:right">
        <h2 style="font-weight:bold">NOMBRE DEL PRODUCTO:</h2>
        <h2 style="text-align: center;">{{ $producto->nombre }}</h2>
        <br>
        <br>
        <h2 style="font-weight: bold;">DESCRIPCION:</h2>
        <h2 style="text-align: center;">{{ $producto->descripcion }}</h2>
        <br>
        <br>
        <h2 style="font-weight:bold">PRECIO:</h2>
        <h2 style="text-align:right">{{ $producto->precio }}€</h2>
        <br>
        <br>
        <div style="width: 100%;">
                <form action="{{route ('carrito.agregar', $producto->producto)}}" method="post">
                @csrf 
                <b style="font-size: x-large">Cantidad:  </b><input type="number" name="cantidad" value="1" style="height: 35px; width:30%; float:right">
                <br>
                <button type="submit" class="btn btn-warning" style="width:100%; margin-top: 5px;text-align: center;">Añadir al carrito</button>
                </form>

                <form action="{{route('productos.destroy', $producto)}}" style="margin-top: 10px; width:100%" method="post">
                    @csrf
                    @method('delete')
                    <div >
                    @auth
                        <button type="submit" class="btn btn-danger" style="width: 47%; float: left">Eliminar producto</button>
                        <a class="btn btn-secondary" href="{{route('productos.edit', $producto)}}" style="color: white; width:47%;float:right; text-align:center">Editar producto</a>
                    @endauth 
                    </div>
                </form>
        </div>
      

    </div>

    <div id="izq" style="width: 50%; float:left; text-align: center">
    <h2><img src="{{ asset($producto->imagen) }}" alt="Imagen no disponible" style="height: 450px; width: 450px">
    </div>  
</h2>
<br>
<br>
<br>
</body>
</html>

@endsection