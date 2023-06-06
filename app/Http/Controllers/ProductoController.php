<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller {
    public function index(){

        $productos = DB::select('SELECT * FROM productos');

        return view('productos.index', ['listaproductos' => $productos]);
    } 

    public function show($nombreproducto){
        return view('productos.show', ['producto' => $nombreproducto]);
    }

    public function create(){
        return view('productos.create');
    } 

    public function store(Request $request){
        echo "<pre>";
        echo $request->input('nombre');
        echo $request->input('precio');
        echo "</pre>";
    }

    public function edit($producto){
        return view('productos.edit', ['producto' => $producto]);
    }

    public function update(Request $request, $producto){
        echo "<pre>";
        echo $producto.' - ';
        echo $request->input('nombre').' - ';
        echo $request->input('precio').' - ';
        echo "</pre>";
    }

    public function destroy($producto){
        echo "Registro $producto eliminado";
    }
}