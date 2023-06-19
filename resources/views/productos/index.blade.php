@extends('layouts/template')

@section('title', 'Catalogo de productos')

@section('content')

<body>
@if(session('success'))
    <div class="alert alert-success" style="text-align: center;" role="alert">
    {{session('success')}}
    </div>    
 @endif
  <style>      
         
          table{
              width: 90%;
          }

          .cajon {
            width: 20%;
            height: 20%;
            margin: 30px;
            display: inline-block;
            text-align: center;
            line-height: 50px;
            font-size: 20px;
            color: #333;
            font-weight: bold;
            font-size: larger;
            
        }

        img{
            width: 100%;
            height: 100%;
        }

  </style>
    <table align="center">
            <tbody>
            @foreach($listaproductos as $item)
            <div style="text-align: center;" class="cajon">
            <div style="border: 1px solid orange;">
                <a href="{{ url('productos/'.$item->producto) }}">
                    <img src="{{ asset($item->imagen) }}" alt="Imagen no disponible">
                </a>
                <h4>{{$item->nombre}}</h4>
                <h4>{{$item->precio}}€</h4>
            </div>
                
                <form action="{{route ('carrito.agregar', $item->producto)}}" method="post">
                    @csrf 
                    <input type="number" name="cantidad" value="1" style="width: 20%; height: 100%">
                    <button type="submit" class="btn btn-warning" style="text-align: center; width:70%">Añadir al carrito</button>
                </form>
            </div>
 
            @endforeach
        </tbody>
    </table>

    <!--<form action="" method="post">
        @method("DELETE")
        @csrf

        <button type="submit">Eliminar</button>
    </form>-->

</body>
</html>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</body>
</html>

@endsection