<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class MostrarPdf extends Controller
{
    public function generarPDF()
    {
        $data = ['contenido' => 'Este es un contenido dinámico para el PDF'];

        $pdf = PDF::loadView('pdf', $data);

        // Para descargar el PDF directamente
        return $pdf->download('mi-pdf.pdf');

        // O para mostrar el PDF en el navegador:
        // return $pdf->stream();
    }
}
