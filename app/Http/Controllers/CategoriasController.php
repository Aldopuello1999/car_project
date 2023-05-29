<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias  = Categoria::all();

        return view('modules.categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required'

        ]);


        $categorias = new Categoria();
        $categorias->name = $request->name;
        $categorias->save();


        return redirect()->route('categorias.index')->with('success', 'Producto creado correctamente.');
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
            'nombre' => 'required'
        ]);

        $categorias = Categoria::findOrFail($id);
        $categorias->nombre = $request->nombre;

        // Actualizar otros campos según sea necesario
        $categorias->save();
        // $categoriaLIst = new Categoria()



        return redirect()->route('categorias.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy($id)
    {
        $categorias = Categoria::findOrFail($id);
        $categorias->delete();

        return redirect()->route('categorias.index')->with('success', 'Producto eliminado correctamente.');
    }
}
