<?php

namespace App\Http\Controllers;

use Webpatser\Uuid\Uuid;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as SupportCollection;

class CarritoActualController extends Controller
{

    public function addNewProduct(Request $request)
    {
        $carrito = $this->getActualCarrito();

        $idProducto = $request->idProducto;
        $producto = Product::findOrFail($idProducto);

        $cantidad = 1;
        $id = Uuid::generate()->string;
        $newItem = compact('id', 'producto', 'cantidad');
        $carrito->push($newItem);

        $this->saveCarrito($carrito);

        return response()->json([], 200);
    }

    public function getActualCarrito()
    {
        $carrito = collect(session('actualCarrito', []));

        // $newCar = [];
        // foreach ($carrito as $value) {
        //     if (!key_exists('id', $value)) {
        //         $id = Uuid::generate()->string;
        //         $value['id'] = $id;
        //     }
        //     $newCar[] = $value;
        // }
        // $this->saveCarrito(collect($newCar));

        return $carrito;
    }

    public function saveCarrito(SupportCollection $carrito)
    {
        session(['actualCarrito' => $carrito->all()]);
    }

    public function deleteProduct(Request $request)
    {
        $id = $request->idEliminar;

        $carrito = $this->getActualCarrito();

        $car = $carrito->filter(function ($item) use ($id) {
            return $item['id'] != $id;
        });

        $this->saveCarrito($car);

        return back();
    }

    public function updateItem(Request $request)
    {
        $carrito = $this->getActualCarrito();

        $idItem = $request->id;
        $cant = $request->cant;

        $newCar = [];
        foreach ($carrito as $value) {
            if ($value['id'] == $idItem) {
                $value['cantidad'] = $cant;
            }
            $newCar[] = $value;
        }

        $this->saveCarrito(collect($newCar));

        return response()->json([], 200);
    }

    public function totalCarrito($carrito)
    {
        $total = 0;
        foreach ($carrito as $value) {

            $total += $value['producto']->precio * $value['cantidad'];
        }

        return $total;
    }
}
