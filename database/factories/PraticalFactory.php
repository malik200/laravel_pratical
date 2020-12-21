<?php

namespace Database\Factories;

use App\Models\Pratical;
use Illuminate\Database\Eloquent\Factories\Factory;

class PraticalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pratical::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            'content' => $this->faker->sentence(50),
        ];
    }
}
