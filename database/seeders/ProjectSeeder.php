<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('projects')->insert([
            ['title' => 'Gestión de Bibliotecas', 'description' => 'Sistema web para préstamo de libros.'],
            ['title' => 'App de Tareas', 'description' => 'Aplicación SPA con Vue y Laravel.'],
            ['title' => 'E-commerce Básico', 'description' => 'Tienda online con pasarela de pagos.'],
        ]);
    }
}
