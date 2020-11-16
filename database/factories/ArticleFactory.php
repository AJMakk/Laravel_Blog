<?php

namespace Database\Factories;

use App\Models\Article;
use FactoryCall;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => null,
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph(4),
            'created_at'=>$this->faker->dateTime('now'),
            //'user_id' => $this->faker->,
        ];
    }
}
