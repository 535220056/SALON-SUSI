<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    // Definisikan definisi untuk model Category di sini
    public function definition()
    {
        return [
            'name' => $this->faker->word,       // Nama kategori acak
            'image' => $this->faker->imageUrl,  // URL gambar acak
        ];
    }
}
