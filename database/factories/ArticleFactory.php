<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Media;
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
            'title' => $this->faker->text(50),
            'slug' => $this->faker->slug(4),
            'content'  => $this->faker->text(500),
            'main_media' => Media::where('status', true)->get()->random()->id,
            'language' => $this->faker->randomElement(['fr', 'ar', 'en']),
            'categorie_id' => Categorie::all()->random()->id,
            'extrait' => $this->faker->paragraph(),
            'rating' => $this->faker->numberBetween(0, 5),
            'nbr_votes' => $this->faker->numberBetween(0, 20),
            'status' => $this->faker->boolean(),
            'deleted_at' => null,
            'created_at' => $this->faker->dateTimeBetween('-1 years'),
            'updated_at' => null
        ];
    }
}
