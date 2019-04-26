<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Produto::class, 5)->create()->each(function ($produto) {
            $produto->save(factory(App\Produto::class)->make());
        });
      
       
    }
}
