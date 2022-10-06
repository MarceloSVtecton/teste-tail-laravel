<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;
use Database\Seeders\DatabaseSeeder;
use Database\Factories\ProdutoFactory;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
    
    {
       Produto::factory(10)->create();
        
        
       

    }
    }
}
