<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Student::create(['pai' => 3, 'nome' => "Marcos", 'anos_atraso' => 0, 'cadastro_inep' =>	'123113689405', 'ano_nascimento' => 2006, 'etnia' => 'Branco', 'turma_atual' => 1010, 'idade' => 11, 'sexo' => 'M', 'zona_residencial' => 'Urbana', 'prob_evasao' => 11., 'prob_rep' =>	1., 'prob_promo' => 88.]);
        App\Student::create(['pai' => 3, 'nome' => "Amanda", 'anos_atraso' => 1, 'cadastro_inep' =>	'124047913382', 'ano_nascimento' => 2004, 'etnia' => 'Parda', 'turma_atual' => 1111, 'idade' => 13, 'sexo' => 'F', 'zona_residencial' => 'Urbana', 'prob_evasao' => 7., 'prob_rep' =>	3., 'prob_promo' => 90.]);

    }
}
