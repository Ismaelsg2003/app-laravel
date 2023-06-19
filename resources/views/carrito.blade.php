@extends('layouts/template')

@section('title', 'Carrito de la compra')

@section('content')

<!-- carrito.blade.php -->
<h3>Carrito de compras</h1>
<br>
<br>

@if(session('success'))
    <div class="alert alert-success" style="text-align: center;" role="alert">
    {{session('success')}}
    </div>    
 @endif

@if(count($carrito) > 0)

<form action="{{route ('carrito.limpiar')}}" method="post" style="float:right">
        @csrf
        <button type="submit" class="btn btn-danger">VACIAR CARRITO</button>
</form>
<br>
<br>

    <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col"></th>
                </tr>
            </thead>

<?php $total=0; ?>

        <tbody>

            @foreach($carrito as $producto)
                    <tr>
                    <th scope="row">
                        {{$producto['producto']->nombre}}   
                    </th>
                    <td>{{$producto['producto']->precio * $producto['cantidad']}} €</td>
                    <?php
                            $subtotal = $producto['producto']->precio * $producto['cantidad'];
                            $total += $subtotal;
                            ?>
                    <td>
                        <form action="{{ route('carrito.actualizar', $producto['producto']) }}" method="post">
                            @csrf
                            <button type="submit" class="btn " hidden></button>
                            <input type="number" name="cantidad" value="{{ $producto['cantidad'] }}" min="1" style="width: 10%;">
                        </form>
                    </td>
                    <td>
                        <form action="{{route ('carrito.eliminar', $producto['producto'])}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">X</button>
                        </form>
                    </td>
                    </tr>

            @endforeach

        </tbody>
    
    </table>

    <h2 >Coste total: {{$total}} €</h2>
    
@else
    <p>No hay productos en el carrito.</p>
@endif


@endsection