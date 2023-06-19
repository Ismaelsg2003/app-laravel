@extends('layouts/template')

@section('title', 'Inicio')

@section('content')

    <div class="container mt-3">
    <h1 style="text-align:center;">Tienda Online COS (TFG IAW)</h1>
    
 @if(session('success'))
    <div class="alert alert-success" style="text-align: center;" role="alert">
    {{session('success')}}
    </div>    
 @endif

 
    <style>
        .cajon {
            width: 20%;
            height: 20%;
            border: 2px solid black;
            margin: 20px;
            display: inline-block;
            text-align: center;
            line-height: 200px;
            font-size: 20px;
            color: #333;
            font-weight: bold;
            font-size: larger;
        }

        .cajon:hover{
            font-size: x-large;
        }
    </style>

    <body>
    <a href="trensuperior">
        <div class="cajon" style="background-image: url(https://static.vecteezy.com/system/resources/previews/003/766/757/non_2x/muscular-male-chest-linear-icon-thin-line-illustration-contour-symbol-isolated-outline-drawing-vector.jpg); background-position: center; background-size: cover;">
            Tren Superior
        </div>
    </a>
    <a href="treninferior">
        <div class="cajon" style="background-image: url(https://www.educima.com/dibujo-para-colorear-piernas-dl11476.jpg); background-position: center; background-size: cover;">
            Tren Inferior
        </div>
    </a>
    <a href="cuerpocompleto">
        <div class="cajon" style="background-image: url(https://previews.123rf.com/images/grgroup/grgroup1705/grgroup170502861/78139997-hombre-sin-rostro-de-cuerpo-completo-de-dibujos-animados-silueta-borrosa-con-ilustraci%C3%B3n-de-vector.jpg); background-position: center; background-size: cover;">
            Cuerpo Completo
        </div>
    </a>
    <a href="accesorios">
        <div class="cajon" style="background-image: url(https://media.istockphoto.com/id/1317457582/es/vector/liniero.jpg?s=612x612&w=0&k=20&c=g2vqpU_7XUJJe-K3EuvlYLT2UQLskz2jb_3wfA7I1Hg=); background-position: center; background-size: cover;">
            Accesorios
        </div>
    </a>    
    
    </body>

    <div class="d-flex justify-content-center"><p>Desarrollo de una tienda online utilizando el framework Laravel</p></div>
    
    </div>;


@endsection