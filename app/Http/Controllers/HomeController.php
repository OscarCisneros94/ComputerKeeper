<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countEnproceso = Servicio::where('Estado', 'En proceso')->count();
        $countAbierto = Servicio::where('Estado', 'Abierto')->count();
        $countCerrado = Servicio::where('Estado', 'Cerrado')->count();
        $servicio = Servicio::whereIn('Estado', ['En proceso', 'Abierto'])
        ->orderBy('Cod_Servicio', 'DESC')
        ->paginate(0);    
        $totalServicios = Servicio::count();
    
        return view('layouts.tarjeta',compact('servicio','countEnproceso', 'countAbierto', 'countCerrado', 'totalServicios'));
        
    }
}
