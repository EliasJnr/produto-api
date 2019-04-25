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
        factory(App\Produto::class, 50)->create()->each(function ($produto) {
            $produto->save(factory(App\Post::class)->make());
        });
      
       
    }
}
