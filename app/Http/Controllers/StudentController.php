<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Paginación obligatoria
        $students = Student::paginate(5);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // 1. Validamos y GUARDAMOS los datos validados en una variable
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            // 'phone' => 'nullable', // Añade esto si tienes teléfono
        ]);

        // 2. Creamos el estudiante SOLO con los datos validados
        // (Esto excluye automáticamente el '_token')
        Student::create($validatedData);

        return redirect()->route('students.index')
            ->with('success', __('Student created successfully.'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', __('Student updated successfully.'));
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')
            ->with('success', __('Student deleted successfully.'));
    }
}
