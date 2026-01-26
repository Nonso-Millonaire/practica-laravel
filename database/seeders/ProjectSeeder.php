<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Limpiamos la tabla antes de rellenar
        DB::table('projects')->truncate();

        $projects = [
            [
                'title' => 'Sistema de Gestión de Bibliotecas',
                'description' => 'Aplicación web completa para gestionar préstamos, devoluciones y catálogo de libros usando Laravel y MySQL.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'E-Commerce con Pasarela de Pago',
                'description' => 'Tienda online desarrollada con Livewire. Incluye carrito de compras, gestión de stock e integración con Stripe.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'API RESTful para App Móvil',
                'description' => 'Backend robusto con autenticación JWT, documentación en Swagger y optimización de consultas para una app de delivery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dashboard Analítico',
                'description' => 'Panel de control administrativo con gráficos en tiempo real usando Chart.js y reportes exportables en PDF.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Portfolio Personal',
                'description' => 'Sitio web estático generado con Blade para mostrar experiencia curricular y proyectos previos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chat en Tiempo Real',
                'description' => 'Sistema de mensajería instantánea utilizando Laravel Reverb y WebSockets con salas privadas y grupales.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('projects')->insert($projects);
    }
}
