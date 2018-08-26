<?php

use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Classroom::create(['id' => 1010, 'nome' => 'Sexta_11',  'ano_letivo' => 2018,'escola_id' => 33057800, 'etapa' => 6]);
        App\Classroom::create(['id' => 1111, 'nome' => 'Setima_11', 'ano_letivo' => 2018, 'escola_id' =>	33057800, 'etapa' => 7]);
    }
}
