<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Product::all();
        $categorias  = Categoria::all();

        return view('modules.productos.index', compact('productos', 'categorias'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'id_categories' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'precio' => 'required|numeric',
        ]);


        $producto = new Product();
        $producto->name = $request->name;
        $producto->id_categories = $request->id_categories;
        $producto->description = $request->description;
        $producto->photo = $request->photo;
        $producto->precio = $request->precio;
        $producto->save();


        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

    public function show($id)
    {
        // $producto = Product::findOrFail($id);
        // return view('productos.show', compact('producto'));
    }

    public function edit($id)
    {
        // $producto = Product::findOrFail($id);
        // return view('productos.index', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'id_categories' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'precio' => 'required|numeric',
        ]);

        $producto = Product::findOrFail($id);
        $producto->name = $request->name;
        $producto->id_categories = $request->id_categories;
        $producto->description = $request->description;
        $producto->photo = $request->photo;
        $producto->precio = $request->precio;
        // Actualizar otros campos según sea necesario
        $producto->save();
        // $categoriaLIst = new Categoria()



        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy($id)
    {
        $producto = Product::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
