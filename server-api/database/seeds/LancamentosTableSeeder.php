<?php

use Illuminate\Database\Seeder;

class LancamentosTableSeeder extends Seeder
{
    public function run()
    {

      DB::table('lancamentos')->insert([
        'tipo' => 1,
        'data' => '2019-09-02',
        'descricao' => 'Livro - Casa do código',
        'valor' => 69.90,
      ]);

      DB::table('lancamentos')->insert([
        'tipo' => 2,
        'data' => '2019-09-08',
        'descricao' => 'Salário',
        'valor' => 1500.00,
      ]);

        DB::table('lancamentos')->insert([
          'tipo' => 1,
          'data' => '2019-09-28',
          'descricao' => 'Parcela Carro',
          'valor' => 656.87,
        ]);

        DB::table('lancamentos')->insert([
          'tipo' => 1,
          'data' => '2019-09-29',
          'descricao' => 'Pizzaria',
          'valor' => 35.90,
        ]);

        DB::table('lancamentos')->insert([
          'tipo' => 2,
          'data' => '2019-09-29',
          'descricao' => 'Job PHP',
          'valor' => 280.00,
        ]);

        DB::table('lancamentos')->insert([
          'tipo' => 1,
          'data' => '2019-09-30',
          'descricao' => 'Uber',
          'valor' => 17.45,
        ]);
    }
}
