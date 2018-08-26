<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create(['cpf' => '25214163688', 'nome' =>	"Maria", 'email' =>	"maria252@hotmail.com", 'celular' => "+5521934891209", "senha" => bcrypt('senha123')]);
        App\User::create(['cpf' => '74785896955',		'nome' => 'Jose', 'email' =>	"jose747@hotmail.com", 'celular' =>	"+5521933220044", "senha" => bcrypt('senha123')]);
        App\User::create(['cpf' => '16708186756',		'nome' => "Larissa",	'email' => "larissa@gmail.com", 'celular' => "+5521995405544", "senha" => bcrypt('senha123')]);

    }
}
