<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteEmpresarial;
use App\Models\Cliente;
use App\Models\Empresa;
use Illuminate\Support\Facades\Redirect;


class ClienteEmpresarialController extends Controller
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
        $cliente_empresarial = ClienteEmpresarial::orderBy('Cod_Cliente_Emp', 'DESC')->paginate();
        return view('cliente_empresarial.index', compact('cliente_empresarial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                //Consulta de personas
                $empresas = Empresa::orderBy('Cod_Empresa', 'DESC')
                ->select('Cod_Empresa', 'Nombre')
                ->get();
    
            return view('cliente_empresarial.create',['empresas' => $empresas]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Crear un nuevo cliente
        $cliente = new Cliente;
        $cliente->Tipo_Cliente = 'Empresarial';
        $cliente->Fecha_Registro = now()->toDateString();
        $cliente->save();

        // Obtener el ID del cliente recién creado
        $clienteID = $cliente->Cod_Cliente;

        // Crear un nuevo cliente empresarial
        $clientes_empresarial = new ClienteEmpresarial;
        $clientes_empresarial->Cod_Cliente_Emp = $clienteID;
        $clientes_empresarial->Cod_Empresa = $request->input('Cod_Empresa');
        $clientes_empresarial->Nombres = $request->input('Nombres');
        $clientes_empresarial->Apellidos = $request->input('Apellidos');
        $clientes_empresarial->Cargo = $request->input('Cargo');
        $clientes_empresarial->Direccion = $request->input('Direccion');
        $clientes_empresarial->Telefono = $request->input('Telefono');
        $clientes_empresarial->Num_CC = $request->input('Num_CC');
        $clientes_empresarial->Fecha_Nac = $request->input('Fecha_Nac');
        $clientes_empresarial->Correo = $request->input('Correo');
        $clientes_empresarial->save();

        return redirect('cliente_empresarial');
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
    public function edit($Cod_Cliente_Emp)
    {
        $cliente_empresarial = ClienteEmpresarial::findOrFail($Cod_Cliente_Emp);
        return view("cliente_empresarial.edit", ["cliente_empresarial" => $cliente_empresarial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Cod_Cliente_Emp)
    {
        $clientes_empresarial=ClienteEmpresarial::findOrFail($Cod_Cliente_Emp);
        $clientes_empresarial->Cod_Empresa = $request->input('Cod_Empresa');
        $clientes_empresarial->Nombres = $request->input('Nombres');
        $clientes_empresarial->Apellidos = $request->input('Apellidos');
        $clientes_empresarial->Cargo = $request->input('Cargo');
        $clientes_empresarial->Direccion = $request->input('Direccion');
        $clientes_empresarial->Telefono = $request->input('Telefono');
        $clientes_empresarial->Num_CC = $request->input('Num_CC');
        $clientes_empresarial->Fecha_Nac = $request->input('Fecha_Nac');
        $clientes_empresarial->Correo = $request->input('Correo');
        $clientes_empresarial->update();

        return Redirect::to('cliente_empresarial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Cod_Cliente_Emp)
    {
        $clientes_empresarial = ClienteEmpresarial::findOrFail($Cod_Cliente_Emp);

        // Elimina el registro de cliente empresarial, si existe
        $clientes_empresarial->delete();

        // Encuentra el registro de cliente correspondiente en la tabla 'cliente' y elimínalo, si existe
        $cliente = Cliente::find($clientes_empresarial->Cod_Cliente_Emp);
        $cliente ? $cliente->delete() : null;

        // Agrega tus instrucciones de redirección 
        return Redirect::to('cliente_empresarial');
    }

}
