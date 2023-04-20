<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        /*
        return [
        'url' => '/products'.$this->faker->image('storage/app/public/products', 640, 480, null, false)
        'image' => 'subcategory/'.$this->faker->image('storage/app/public/subcategory', 640, 480, null, false)
        ];*/
        
        $fakerFilesName = $this->faker->image(storage_path("app/public/products"), 640, 480);//subcategory en vez de products iba
        return [
            //
            /*
            'image' => 'categories/'.$this->faker->image('storage/app/public/categories', 640, 480,null, false)
            */
            
            //image en vez de los 2 url iba
            'url' => 'subcategories/'.$this->faker->imageUrl(640,480),
            'url' => "app/public/subcategories".basename($fakerFilesName)

        ];
    }
}
