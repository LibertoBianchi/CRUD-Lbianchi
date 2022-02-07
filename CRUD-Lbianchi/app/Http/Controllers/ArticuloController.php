<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

use App\Http\Requests\StoreArticulo;
use Illuminate\Support\Facades\Gate;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulo.index')->with('articulos',$articulos);
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'nombre' => 'required',
            'mailDistribuidora' => 'required|email',
            'fechaCaducidad' => 'required'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticulo $request)
    {


        $articulos = new Articulo();
        $articulos->nombre = $request->get('nombre');
        $articulos->precio = $request->get('precio');
        $articulos->mailDistribuidora = $request->get('mailDistribuidora');
        $articulos->descripcion = $request->get('descripcion');
        
        
        $articulos->fechaCaducidad = $request->get('fechaCaducidad');
        $articulos->disponible = $request->get('disponible');
       
        $articulos->caducado = $request->get('caducado');

        $articulos->save();
        return view('articulo.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        return view('articulo.edit')->with('articulo',$articulo);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);
        $articulo->nombre = $request->get('nombre');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->precio = $request->get('precio');
        $articulo->caducado = $request->get('caducado');
        $articulo->mailDistribuidora = $request->get('mailDistribuidora');
        $articulo->fechaCaducidad = $request->get('fechaCaducidad');
        $articulo->disponible = $request->get('disponible');

        $articulo->save();
        return view('articulo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     


        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}
