<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
/*
use App\Models\Category;
use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;
/*

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $fakerFilesName = $this->faker->image(storage_path("app/public/categories"), 640, 480);
        return [
            //
            /*
            'image' => 'categories/'.$this->faker->image('storage/app/public/categories', 640, 480,null, false)
            */

            'image' => 'categories/'.$this->faker->imageUrl(640,480),
            'image' => "app/public/categories".basename($fakerFilesName)

        ];
    }
}
