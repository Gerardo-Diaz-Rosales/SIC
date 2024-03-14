<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\App; // Necesitas importar la clase App para usar el método make()

class ReportsController extends Controller
{
    public function print_cardex($id)
    {
        $mystudent = Student::find($id);
        $data = [
            'title' => 'Cardex del estudiante',
            'student' => $mystudent // Eliminé el punto y coma que estaba después de esta línea
        ];

        // Debes usar PDF::loadView() en lugar de App::make('dompdf.wrapper')->loadView()
        $pdf=App::make('dompdf.wrapper');
        $pdf->loadView('reports.cardex',$data);
        return $pdf->stream();
    }
}
