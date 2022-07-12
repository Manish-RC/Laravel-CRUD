<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Library;
use Illuminate\Support\Str;


class LibraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Library::class;

    public function definition()
    {
        return [
            'name' => Str::random(10),
            'author_name' => Str::random(10),
            'price' => mt_rand(1000, 5000),

        ];

    }
}
