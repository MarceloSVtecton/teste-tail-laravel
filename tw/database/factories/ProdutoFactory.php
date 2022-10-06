<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;
use Illuminate\Support\Facades\App;

class ProdutoFactory extends Factory
{
    

     
    
     
    public function definition()
    {
        return [
            'descrição' => $this->faker->sentence,
            'preço' => $this->faker->randomFloat(1, 20, 30),
            'quantidade' => $this->faker->randomDigit(),
            //
        ];
    }
}
