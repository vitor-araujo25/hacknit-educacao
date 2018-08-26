<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\School::create(['email' => 'mfpn@nit.gov.br', 'nome' => 'E M FRANCISCO PORTUGAL NEVES', 'codigo' => 33057800, 'localizacao' => 'Urbana', "senha" => bcrypt('senha123')]);
        App\School::create(['email' => 'empf@nit.gov.br', 'nome' => 'E M PAULO FREIRE', 'codigo' =>	33146640, 'localizacao' => 'Urbana', 'senha' => bcrypt('senha123')
]);

    }
}
