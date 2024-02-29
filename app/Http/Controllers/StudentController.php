<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    public function index()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_student' => 'required',
            'id_student' => 'required|unique:users,email',
            'email_student' => 'required|email|unique:users,email',
            'password_student' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name_student,
            'email' => $request->id_student,
            'password' => bcrypt($request->password_student),
        ]);

        return redirect('login')->with('success', '¡Usuario registrado exitosamente! Por favor, inicia sesión para continuar.');
    }

    public function show()
    {
        $students = User::all();
        return view('students', ['students' => $students]);
    }
}
