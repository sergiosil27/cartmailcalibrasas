<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

/**
 * Class PlatoController
 * @package App\Http\Controllers
 */
class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = Plato::paginate();

        return view('plato.index', compact('platos'))
            ->with('i', (request()->input('page', 1) - 1) * $platos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plato = new Plato();
        return view('plato.create', compact('plato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Plato::$rules);

        #$plato = Plato::create($request->all());
        $plato = new Plato();
        $plato->nombre = $request->nombre;
        $plato->descripcion = $request->descripcion;
        $plato->precio = $request->precio;

        // script para subir la imagen
        if($request->hasFile("image_path")){

            $image_path = $request->file("image_path");
            $nombreimagen = $image_path->getClientOriginalName();
            $ruta = public_path("images/platos/");

            $image_path->move($ruta,$nombreimagen);

            $plato->image_path = $nombreimagen;

        }
        $plato->save();

        return redirect()->route('platos.index')
            ->with('success', 'Plato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plato = Plato::find($id);

        return view('plato.show', compact('plato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plato = Plato::find($id);

        return view('plato.edit', compact('plato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Plato $plato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plato $plato)
    {

        $plato->nombre = $request->nombre;
        $plato->descripcion = $request->descripcion;
        $plato->precio = $request->precio;

        if($request->hasFile("image_path")){

            $image_path = $request->file("image_path");
            $nombreimagen = $image_path->getClientOriginalName();
            $ruta = public_path("images/platos/");

            $image_path->move($ruta,$nombreimagen);

            $plato->image_path = $nombreimagen;

        }
        $plato->update();

        return redirect()->route('platos.index')
            ->with('success', 'Plato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $plato = Plato::find($id)->delete();

        return redirect()->route('platos.index')
            ->with('success', 'Plato deleted successfully');
    }
}
