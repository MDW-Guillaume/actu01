<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->realText(),
            'content' => fake()->paragraphs(4),
            'image' => fake()->imageUrl(640, 480, 'animals', true),
            'read' => fake()->numberBetween(1, 350),  
            'user_id' => fake()->numberBetween(1, 7),
            'rubric_id' => fake()->numberBetween(1, 9),

        ];
    }
}
