<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre'=>$this->faker->word(),
            'auteur'=>$this->faker->name(),
            'date'=>$this->faker->date('Y-m-d','now'),
            'nbPages'=>$this->faker->numberBetween(100,500),
            'mobile'=>$this->faker->boolean(50),
        ];
    }
}