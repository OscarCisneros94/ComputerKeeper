<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:VerEquipo')->only('index');
        $this->middleware('permission:CrearEquipo')->only(['create', 'store']);
        $this->middleware('permission:EditarEquipo')->only(['edit', 'update']);
        $this->middleware('permission:EliminarEquipo')->only('destroy');
    }

    public function index()
    {

        $equipo = Equipo::orderBy('Cod_Equipo', 'DESC')->paginate(0);
        return view('equipo.index', compact('equipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipos = new Equipo;
        $equipos->Cod_Cliente = $request->get('Cod_Cliente');
        $equipos->Nombre_Equipo = $request->get('Nombre_Equipo');
        $equipos->Marca = $request->get('Marca');
        $equipos->Modelo = $request->get('Modelo');
        $equipos->Serial = $request->get('Serial');
        $equipos->Nombre_SO = $request->get('Nombre_SO');
        $equipos->Procesador = $request->get('Procesador');
        $equipos->Memoria_RAM = $request->get('Memoria_RAM');
        $equipos->Tipo_Sistema = $request->get('Tipo_Sistema');
        $equipos->Tipo_Equipo = $request->get('Tipo_Equipo');
        $equipos->save();
        return Redirect::to('equipo');
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
    public function edit($Cod_Equipo)
    {
        $equipo = Equipo::findOrFail($Cod_Equipo);
        return view("equipo.edit", ["equipo" => $equipo]);
    }

    public function update(Request $request, $Cod_Equipo)
    {
        $equipos = Equipo::findOrFail($Cod_Equipo);
        $equipos->Cod_Cliente = $request->get('Cod_Cliente');
        $equipos->Nombre_Equipo = $request->get('Nombre_Equipo');
        $equipos->Marca = $request->get('Marca');
        $equipos->Modelo = $request->get('Modelo');
        $equipos->Serial = $request->get('Serial');
        $equipos->Nombre_SO = $request->get('Nombre_SO');
        $equipos->Procesador = $request->get('Procesador');
        $equipos->Memoria_RAM = $request->get('Memoria_RAM');
        $equipos->Tipo_Sistema = $request->get('Tipo_Sistema');
        $equipos->Tipo_Equipo = $request->get('Tipo_Equipo');
        $equipos->update();
        return Redirect::to('equipo');
    }


    public function destroy($Cod_Equipo)
    {
        $equipos=Equipo::findOrFail($Cod_Equipo);
        $equipos->delete();
        return Redirect::to('equipo');
    }
}