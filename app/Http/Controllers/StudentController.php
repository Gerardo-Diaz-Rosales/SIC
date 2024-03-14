<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
 use App\Models\Unit;
 use App\Models\Subject;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(10);
        return view("students",compact("students"));
    }

    public function formulario()
    {
        return view('formulario');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name_student' => 'required',
            'lastname_student' => 'nullable',
            'id_student' => 'required|unique:students,id_student',
            'birthday' => 'required|date',
            'comments' => 'nullable',
        ]);

        Student::create([
            'name_student' => $request->name_student,
            'lastname_student' => $request->lastname_student,
            'id_student' => $request->id_student,
            'birthday' => $request->birthday,
            'comments' => $request->comments,
        ]);

        // Redirige a una ruta adecuada después de guardar el estudiante
        return redirect()->route('formulario')->with('success', '¡Estudiante registrado exitosamente!');
    }

    public function show($id)
    {
        $student=Student::find($id);
        return view('show-student',compact('student'));
        //$students = User::all();
        //return view('students', ['students' => $students]);
    }

    public function edit($id)
    {
        $student=Student::find($id);
        return view('edit-student',compact('student'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name_student' => 'required|alpha', // Solo validamos el nombre
        ]);

        $student = Student::find($id);
        $student->name_students = $request->name_student;
        $student->save();

        return redirect()->route('estudiantes.index')->with('notificacion', 'Estudiante modificado correctamente');
    }


}
