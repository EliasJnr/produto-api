<?php

use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Produto::create([
            'nome' => str_random(10),
            'descricao' => str_random(10)
        ]);
        
    }
}
