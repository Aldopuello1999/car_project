<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CarritoController extends Controller
{

    public function index(Request $request)
    {
        $controller = new CarritoActualController();
        $productos = Product::all();
        $carrito = $controller->getActualCarrito();
        $total = $controller->totalCarrito($carrito);
        return view('modules.carrito.index', compact('productos', 'total', 'carrito'));
    }
}
