<?php

namespace Database\Factories;

use App\Models\noticia;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = noticia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->text(rand(10, 40)),
            'noticia' => $this->faker->text(rand(200, 400)),
        ];
    }
}
