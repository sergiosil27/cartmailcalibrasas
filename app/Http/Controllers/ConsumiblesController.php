<?php

namespace App\Http\Controllers;

use App\Models\Consumible;
use Illuminate\Http\Request;

class ConsumiblesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Consumible::paginate();

        return view('productos.productos_index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("productos.productos_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Consumible();
        $producto->codigo = $request->codigo;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->existencia = $request->existencia;

        // script para subir la imagen
        if($request->hasFile("image_path")){

            $image_path = $request->file("image_path");
            $nombreimagen = $image_path->getClientOriginalName();
            $ruta = public_path("images/platos/");

            $image_path->move($ruta,$nombreimagen);

            $producto->image_path = $nombreimagen;

        }
        $producto->save();
        return redirect()->route("consumibles.index")->with('success', 'producto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto =  Consumible::find($id);

        return view('productos.productos_show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumible $consumible)
    {
        return view("productos.productos_edit", ["producto" => $consumible,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumible $consumible)
    {
        $consumible->codigo = $request->codigo;
        $consumible->nombre = $request->nombre;
        $consumible->descripcion = $request->descripcion;
        $consumible->precio = $request->precio;
        $consumible->existencia = $request->existencia;

        // script para subir la imagen
        if($request->hasFile("image_path")){

            $image_path = $request->file("image_path");
            $nombreimagen = $image_path->getClientOriginalName();
            $ruta = public_path("images/platos/");

            $image_path->move($ruta,$nombreimagen);

            $consumible->image_path = $nombreimagen;

        }
        $consumible->update();
        return redirect()->route("consumibles.index")->with("mensaje", "Producto actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumible $consumible)
    {
        $consumible->delete();
        return redirect()->route("consumibles.index")->with("mensaje", "Producto eliminado");
    }
}


