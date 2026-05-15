<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Medicamentos',
                'slug' => 'medicamentos',
                'description' => 'Medicamentos de venta bajo formula y uso general.',
            ],
            [
                'name' => 'Venta Libre',
                'slug' => 'venta-libre',
                'description' => 'Productos OTC para sintomas comunes.',
            ],
            [
                'name' => 'Vitaminas y Suplementos',
                'slug' => 'vitaminas-suplementos',
                'description' => 'Vitaminas, minerales y suplementos nutricionales.',
            ],
            [
                'name' => 'Cuidado Personal',
                'slug' => 'cuidado-personal',
                'description' => 'Productos de higiene y cuidado diario.',
            ],
            [
                'name' => 'Primeros Auxilios',
                'slug' => 'primeros-auxilios',
                'description' => 'Insumos basicos para curaciones y atencion inicial.',
            ],
        ];

        foreach ($categories as $data) {
            Category::firstOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
