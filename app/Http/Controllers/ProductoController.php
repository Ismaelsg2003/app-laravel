<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller {

    public function inicio(){
        return view('productos.inicio');
    }

    public function trensuperior(){
        $productos = Producto::where('categoria', 'TrenSuperior')->get();
        return view('productos.index', ['listaproductos' => $productos]);
    }
    
    public function treninferior(){
        $productos = Producto::where('categoria', 'TrenInferior')->get();
        return view('productos.index', ['listaproductos' => $productos]);
    }
    
    public function cuerpocompleto(){
        $productos = Producto::where('categoria', 'CuerpoCompleto')->get();
        return view('productos.index', ['listaproductos' => $productos]);
    }
    
    public function cabeza(){
        $productos = Producto::where('categoria', 'Cabeza')->get();
        return view('productos.index', ['listaproductos' => $productos]);
    }
    
    public function accesorios(){
        $productos = Producto::where('categoria', 'Accesorios')->get();
        return view('productos.index', ['listaproductos' => $productos]);
    }

    public function index(){
        return view('productos.index', ['listaproductos' => Producto::all()]);
    } 

    public function show($productoid){
        $producto = Producto::find($productoid);
             
        return view('productos.show', ['producto' => $producto]);
    }

    public function create(){
        return view('productos.create');
    } 

    public function store(Request $request){
        
        $validacion= $request->validate([
            'nombre' => 'required|unique:productos',
            'precio' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
        ]);

       $producto = new Producto();
       $producto->nombre = $request->input('nombre'); 
       $producto->precio = $request->input('precio');
       $producto->descripcion = $request->input('descripcion');
       $producto->categoria = $request->input('categoria');
       $producto->imagen = $request->input('imagen');
        
       $producto->save();

       
       return to_route('productos.show', $producto->producto)->with('success', "Producto creado correctamente");

    }

    public function edit($productoid){
        $producto = Producto::find($productoid);


        return view('productos.edit', ['productoid' => $productoid, 'producto' => $producto]);
    }

    public function update(Request $request, $productoid){
        $validacion= $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
        ]);
        
        $producto = Producto::find($productoid);
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->descripcion = $request->input('descripcion');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('imagen');

        $producto->save();
        
        return to_route('productos.show', $producto->producto)->with('success', "Producto actualizado correctamente");
    }

    public function destroy($productoid){
        $producto = Producto::find($productoid);
        $producto->delete();

        return to_route('productos.inicio')->with('success', "Producto eliminado correctamente");
    }
}