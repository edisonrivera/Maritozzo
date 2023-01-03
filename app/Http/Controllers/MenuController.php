<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
//nuevo
use Validator;
use  Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consultar informacion
        $datos ['platillos'] = Menu::paginate(10);
        //le proporcionamos al index la info para ser vista
        return view ('menu.index',$datos); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Conseguir datos
        $datosMenu = $request-> except('_token');
        if($request -> hasFile('image')){
            $datosMenu['image'] = $request -> file('image')->store('uploads','public');
        }
        Menu::insert($datosMenu);
        return to_route('menu')-> with('mensaje','Registro Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $platillo = Menu::findOrFail($id); 
        return view('menu.edit', compact('platillo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //aqui mandamos a que guarde los cambios de edit en la BD
        $datosMenu = $request-> except(['_token', '_method']);
        //si existe la foto
        if($request -> hasFile('image')){
            //recupera la informacion
            $platillo = Menu::findOrFail($id); 
            //Eliminar la foto anterior
            Storage::delete('public/', $platillo->image);
            //actualice la info
            $datosMenu['image'] = $request -> file('image')->store('uploads','public');
        }
        
        Menu::where('id','=', $id)->update($datosMenu);
        //vuelvo a buscar la info para retornar con los datos actuales
        $platillo = Menu::findOrFail($id); 
        return view('menu.edit', compact('platillo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //destruir la foto del storage
        $platillo = Menu::findOrFail($id); 
        if(Storage::delete('public/'.$platillo->image)){
            //utilizamos el model y usamos el id
            Menu::destroy($id);
        }
        return redirect('menu');
    }
}
