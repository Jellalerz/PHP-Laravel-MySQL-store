<?php

namespace Database\Factories;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    { 

        //With this function we indicate the faker create two words
        $name = $this->faker->sentence(2);
        //Assign categories randomly
        $subcategory = Subcategory::all()->random();
        //Get categiries
        $category = $subcategory->category;
        //Link the brand with categories
        $brand = $category->brands->random();
        
        //If value is true then save null
        if($subcategory->color){
            $quantity = null;
        }else{
            $quantity = 15;
        }

        return [
            //
            'name' =>$name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement(([19.99, 49.99, 99.99])),
            'subcategory_id' => $subcategory->id,
            'brand_id' =>$brand->id,
            'quantity' => $quantity,
            'status' =>2
        ];
    }
}
