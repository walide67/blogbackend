<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $image_url = $this->faker->imageUrl(640, 480, 'technics', true);
        return [
            'title' => $this->faker->text(50),
            'url' => $image_url,
            'description' => $this->faker->text('200'),
            'thumb_url' => null,
            'type' => "jpeg",
            'status' => $this->faker->boolean(),
        ];
    }
}
