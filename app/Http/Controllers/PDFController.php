<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Servicio;

class PdfController extends Controller
{
    public function generarPDF()
    {
        $datos = Servicio::all(); // Aquí obtienes los datos de tu tabla
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.reporte', compact('datos'));

        return $pdf->download('ReporteComputerKeeper.pdf'); // Descarga automática
        // return $pdf->stream('reporte.pdf'); // Para visualizar en el navegador
    }
}