<?php

namespace Database\Factories;

use App\Models\Bibliotheque;
use Illuminate\Database\Eloquent\Factories\Factory;

class BibliothequeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bibliotheque::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->lastName(),
            'adresse'=>$this->faker->address(),
            'numTel'=>$this->faker->e164PhoneNumber()
        ];
    }
}
