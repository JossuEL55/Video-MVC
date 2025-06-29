<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendedor;

class VendedoresTableSeeder extends Seeder
{
    public function run()
    {
        Vendedor::insert([
            ['nombre' => 'Jossue Ayala',   'email' => 'jossue.ayala@example.com'],
            ['nombre' => 'Melanie Jacome', 'email' => 'melanie.jacome@example.com'],
            ['nombre' => 'Carlos Pérez',   'email' => 'carlos.perez@example.com'],
            ['nombre' => 'María Ortiz',    'email' => 'maria.ortiz@example.com'],
        ]);
    }
}
