<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteParticular;
use App\Models\Cliente;
use Illuminate\Support\Facades\Redirect;

class ClienteParticularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('permission:VerCliente')->only('index');
         $this->middleware('permission:CrearCliente')->only(['create', 'store']);
         $this->middleware('permission:EditarCliente')->only(['edit', 'update']);
         $this->middleware('permission:EliminarCliente')->only('destroy');
     }

    public function index()
    {
        $cliente_particular = ClienteParticular::orderBy('Cod_Cliente_Part', 'DESC')->paginate();
        return view('cliente_particular.index', compact('cliente_particular'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente_particular.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->Tipo_Cliente = 'Particular';
        $cliente->Fecha_Registro = now()->toDateString();
        $cliente->save();

        // Obtener el ID del cliente recién creado
        $clienteID = $cliente->Cod_Cliente;

        // Crear un nuevo cliente empresarial
        $clientes_particular = new ClienteParticular;
        $clientes_particular->Cod_Cliente_Part = $clienteID;
        $clientes_particular->Nombres = $request->input('Nombres');
        $clientes_particular->Apellidos = $request->input('Apellidos');
        $clientes_particular->Direccion = $request->input('Direccion');
        $clientes_particular->Telefono = $request->input('Telefono');
        $clientes_particular->Num_CC = $request->input('Num_CC');
        $clientes_particular->Fecha_Nac = $request->input('Fecha_Nac');
        $clientes_particular->Correo = $request->input('Correo');
        $clientes_particular->save();

        return redirect('cliente_particular');
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
    public function edit($Cod_Cliente_Part)
    {
        $cliente_particular = ClienteParticular::findOrFail($Cod_Cliente_Part);
        return view("cliente_particular.edit", ["cliente_particular" => $cliente_particular]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Cod_Cliente_Part)
    {
        $clientes_particular=ClienteParticular::findOrFail($Cod_Cliente_Part);
        $clientes_particular->Nombres = $request->input('Nombres');
        $clientes_particular->Apellidos = $request->input('Apellidos');
        $clientes_particular->Direccion = $request->input('Direccion');
        $clientes_particular->Telefono = $request->input('Telefono');
        $clientes_particular->Num_CC = $request->input('Num_CC');
        $clientes_particular->Fecha_Nac = $request->input('Fecha_Nac');
        $clientes_particular->Correo = $request->input('Correo');
        $clientes_particular->update();

        return Redirect::to('cliente_particular');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Cod_Cliente_Part)
    {
        $clientes_particular = ClienteParticular::findOrFail($Cod_Cliente_Part);

        // Elimina el registro de cliente empresarial, si existe
        $clientes_particular->delete();

        // Encuentra el registro de cliente correspondiente en la tabla 'cliente' y elimínalo, si existe
        $cliente = Cliente::find($clientes_particular->Cod_Cliente_Part);
        $cliente ? $cliente->delete() : null;

        // Agrega tus instrucciones de redirección 
        return Redirect::to('cliente_particular');
    }
}
