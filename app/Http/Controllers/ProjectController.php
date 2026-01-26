<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    //
    public function index()
    {
        // 2. Obtener los proyectos de la base de datos
        $projects = Project::orderBy('created_at', 'desc')->get();

        // 3. Retornar la vista PASANDO la variable $projects
        // Si olvidas el compact('projects'), dará el error que tienes ahora
        return view('projects.index', compact('projects'));
    }

}
