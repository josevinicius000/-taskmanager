<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    /**
     * Executa a criação de registros na tabela tasks.
     */
    public function run(): void
    {
        Task::insert([
            [
                'name' => 'Fazer um bolo de fubá',
                'description' => 'Fazer um bolo de fubá pra tomar aquele café da tarde',
                'started_at' => Carbon::now()->subDays(5),
                'finished_at' => Carbon::now()->subDay(),
                'created_at' => now(),
                'updated_at' => now(),
                'userid' => 1,
            ],
            [   
                'name' => 'Comprar cigarro',
                'description' => 'Ir comprar cigarro na padaria',
                'started_at' => Carbon::now()->subDay(2),
                'finished_at' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
                'userid' => 1,
            ],
            [
                'name' => 'Testar nova feature',
                'description' => 'Testar a nova feature implementada na última versão do produto',
                'started_at' => Carbon::now(),
                'finished_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'userid' => 1,
            ],
        ]);
    }
}
