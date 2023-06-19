<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    
    public function agregar(Request $request, Producto $producto)
    {
        $cantidad = $request->input('cantidad', 1); // Obtener el valor de "cantidad" del formulario (por defecto 1 si no se proporciona)

        $carrito = session()->get('carrito', []); // Obtener el carrito de la sesión
        $item = [
            'producto' => $producto,
            'cantidad' => $cantidad,
        ];
        $carrito[] = $item; // Agregar el nuevo item al carrito
        session()->put('carrito', $carrito); // Guardar el carrito actualizado en la sesión

        return redirect()->back()->with('success', 'El producto se agregó al carrito correctamente.');
    }

    public function eliminar(Request $request, $producto)
    {
        // Eliminar un producto del carrito
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$producto])) {
            unset($carrito[$producto]);

            // Actualizar el carrito en la sesión
            session()->put('carrito', $carrito);
        }

        return redirect()->back()->with('success', 'Producto eliminado del carrito');
    }

    public function mostrar()
    {
        // Mostrar el contenido del carrito
        $carrito = session()->get('carrito', []);

        return view('carrito')->with('carrito', $carrito);
    }

    public function actualizar(Request $request, $producto)
    {
        $nuevaCantidad = $request->input('cantidad');

        // Obtener el carrito de la sesión
        $carrito = session()->get('carrito', []);

        // Verificar si el producto está en el carrito
        if (isset($carrito[$producto])) {
            $carrito[$producto]['cantidad'] = $nuevaCantidad;

            // Actualizar el carrito en la sesión
            session()->put('carrito', $carrito);

            return redirect()->back()->with('success', 'Cantidad actualizada correctamente');
        }

        return redirect()->back()->with('error', 'No se pudo actualizar la cantidad');
    }

    public function limpiar()
    {
        session()->forget('carrito');

        return redirect()->back()->with('success', 'El carrito se ha limpiado correctamente.');
    }

}
