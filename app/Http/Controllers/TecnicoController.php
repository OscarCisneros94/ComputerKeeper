<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tecnico;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TecnicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:CrearTecnico')->only(['create', 'store']);
        $this->middleware('permission:EditarTecnico')->only(['edit', 'update']);
        $this->middleware('permission:EliminarTecnico')->only(['destroy']);
        $this->middleware('permission:VerTecnico')->only(['index', 'show']);
    }
    
    public function index()
    {
        $tecnico = Tecnico::orderBy('Cod_Tecnico', 'DESC')->paginate();
        return view('tecnico.index', compact('tecnico'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email' => 'Debe ingresar una dirección de correo electrónico válida.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ]);
    }

    public function create()
    {
        return view('tecnico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación de datos
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect('tecnico/create')
                ->withErrors($validator)
                ->withInput();
        }

        $tecnicos = new Tecnico;
        $tecnicos->Nombres = $request->input('Nombres');
        $tecnicos->Apellidos = $request->input('Apellidos');
        $tecnicos->Num_CC = $request->input('Num_CC');
        $tecnicos->Fecha_Ingreso = $request->input('Fecha_Ingreso');
        $tecnicos->Direccion = $request->input('Direccion');
        $tecnicos->Telefono = $request->input('Telefono');
        $tecnicos->Fecha_Nac = $request->input('Fecha_Nac');
        $tecnicos->email = $request->input('email');
        $tecnicos->save();

        // Obtener el ID del cliente recién creado
        $tecnicoID = $tecnicos->Cod_Tecnico;
        $nombreCompleto = $request->input('Nombres') . ' ' . $request->input('Apellidos');

        $user = new User;
        $user->id = $tecnicoID;
        $user->name = $nombreCompleto;
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Asignar el rol "técnico"
        $tecnicos->assignRole('tecnico');
        
        return redirect('tecnico');
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
    public function edit($Cod_Tecnico)
    {
        $tecnico = Tecnico::findOrFail($Cod_Tecnico);
        return view("tecnico.edit", ["tecnico" => $tecnico]);
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
    // Validación de datos
    //$validator = $this->validator($request->all(), true);

    //if ($validator->fails()) {
       // return redirect('tecnico/' . $id . '/edit')
      //      ->withErrors($validator)
      //      ->withInput();
    //}

    // Busca el técnico que deseas actualizar por su ID
    $tecnicos = Tecnico::findOrFail($id);

    // Actualiza los campos del técnico con los datos del formulario
    $tecnicos->Nombres = $request->input('Nombres');
    $tecnicos->Apellidos = $request->input('Apellidos');
    $tecnicos->Direccion = $request->input('Direccion');
    $tecnicos->Telefono = $request->input('Telefono');
    $tecnicos->email = $request->input('email');
    $tecnicos->save();

    // Actualiza el usuario correspondiente en la tabla 'users'
    $user = User::findOrFail($id);
    $user->name = $request->input('Nombres') . ' ' . $request->input('Apellidos');
    $user->email = $request->input('email');

    // Si se proporciona una nueva contraseña, actualízala
    //if ($request->filled('password')) {
       // $user->password = Hash::make($request->input('password'));
    //}

    $user->save();

    return redirect('tecnico');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Cod_Tecnico)
    {
        // Buscar el técnico por su ID
        $tecnicos = Tecnico::findOrFail($Cod_Tecnico);
    
        // Eliminar el técnico, si existe
        $tecnicos->delete();
    
        // Eliminar el usuario correspondiente en la tabla 'users',
        $user = User::find($Cod_Tecnico);
        if ($user) {
            $user->delete();
        }
    
        // Agrega tus instrucciones de redirección 
        return redirect('tecnico');
    }
    
}
