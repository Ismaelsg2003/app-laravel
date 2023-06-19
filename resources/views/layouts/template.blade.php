<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    p{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
</style>
</head>
<body>
    <main>
        <div class="container py-4">
            <div class="container" >
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="\app-laravel\public\index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    <span class="fs-4"><p style="color: orange; font-size:60px;"><b>C O S</b></p></span>
                </a>

                <ul class="nav nav-pills">
                    @guest 

                    <li class="nav-item"><a href="\app-laravel\public\iniciosesion" class="nav-link active" aria-current="page" style="background-color: orange; margin-right:20px">Iniciar Sesion</a></li> 

                    @else

                    <li class="nav-item"><a href="\app-laravel\public\logout" class="nav-link" style="background-color: orange; color: white; margin-right:20px">Cerrar sesion</a></li>
                    <li class="nav-item"><a href="\app-laravel\public\productos\create" class="nav-link" style="background-color: orange; color: white; margin-right:20px">Anadir producto</a></li>



                    @endguest
                    
                    <li class="nav-item"><a href="\app-laravel\public\productos" class="nav-link" style="background-color: orange; color: white">Listar todos los productos</a></li>
                    <li class="nav-item">
                        <a href="\app-laravel\public\carrito" class="nav-link" style="background-color: black; margin-left:15px ; color: white">
                            Carrito
                        </a>
                    </li>
                    
                    

                </ul>
                </header>
            </div>

        @yield('content')

            <div class="container">
                <footer class="py-3 my-4">
                    <p class="text-center text-muted">Creado por Ismael Sanchez Gragera. (IES Albarregas 2023) </p>
                </footer>
            </div> 

        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>