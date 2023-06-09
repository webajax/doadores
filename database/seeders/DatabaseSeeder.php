<?php

namespace Database\Seeders;

use App\Models\Doadores;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dentro da tabela Doadores, crie 50 registros
        Doadores::factory()
            ->count(50)
            ->create();
    }
}
