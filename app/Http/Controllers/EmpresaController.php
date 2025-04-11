<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\Redirect;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('can:VerEmpresa')->only('index');
        $this->middleware('can:CrearEmpresa')->only(['create', 'store']);
        $this->middleware('can:EditarEmpresa')->only(['edit', 'update']);
        $this->middleware('can:EliminarEmpresa')->only('destroy');
    }

    public function index()
    {
        $empresa = empresa::orderBy('Cod_Empresa', 'DESC')->paginate();
        return view('empresa.index', compact('empresa'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresas = new Empresa;
        $empresas->Nombre = $request->get('Nombre');
        $empresas->Num_NIT = $request->get('Num_NIT');
        $empresas->Direccion = $request->get('Direccion');
        $empresas->Telefono = $request->get('Telefono');
        $empresas->Fecha_Contrato = $request->get('Fecha_Contrato');
        $empresas->save();
        return Redirect::to('empresa');
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
    public function edit($Cod_Empresa)
    {
        $empresa = Empresa::findOrFail($Cod_Empresa);
        return view("empresa.edit", ["empresa" => $empresa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Cod_Empresa)
    {
        $empresas = Empresa::findOrFail($Cod_Empresa);
        $empresas->Nombre = $request->get('Nombre');
        $empresas->Num_NIT = $request->get('Num_NIT');
        $empresas->Direccion = $request->get('Direccion');
        $empresas->Telefono = $request->get('Telefono');
        $empresas->Fecha_Contrato = $request->get('Fecha_Contrato');
        $empresas->update();
        return Redirect::to('empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Cod_Empresa)
    {
        $empresas = Empresa::findOrFail($Cod_Empresa);
        $empresas->delete();
        return Redirect::to('empresa');
    }
}