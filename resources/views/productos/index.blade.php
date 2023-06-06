<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de productos</title>

    <style>
        table,td,th{
            border: 1px solid;
        }
        
        table{
            width: 90%;
        }

    </style>
</head>
<body>

    <h1>Catalogo de productos vista</h1>

    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Tipo</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach($listaproductos as $item)
            <tr>
                <td>{{ $item->producto }}</td>
                <td>{{ $item->nombreproducto }}</td>
                <td>{{ $item->precio }}</td>
                <td>{{ $item->descripcion }}</td>
                <td>{{ $item->tipo }}</td>
                <td></td>
                <td></td>
            </tr>
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