<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Writer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'writer_id' => $this->faker->randomElement(Writer::all()->pluck('id')),
            'cover_image' => 'https://images-na.ssl-images-amazon.com/images/I/51Ga5GuElyL._AC_SX184_.jpg',
            'price' => $this->faker->randomFloat(2, 100, 200),
            'tags' => Tag::inRandomOrder()->limit($this->faker->randomNumber(1))->pluck('name'),
        ];
    }
}
