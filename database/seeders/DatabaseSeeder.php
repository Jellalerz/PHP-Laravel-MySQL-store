<?php

namespace Database\Seeders;

/*use App\Models\Subcategory;*/
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /*
        Storage::deleteDirectory('/public/categories');
        Storage::deleteDirectory('/public/subcategory');
        Storage::deleteDirectory('/public/products');

        Storage::makeDirectory('/public/categories');
        Storage::makeDirectory('/public/subcategory');
        Storage::makeDirectory('/public/products');

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);
        $this->call(SizeSeeder::class);
       */

      Storage::deleteDirectory('/public/categories');
      Storage::deleteDirectory('/public/subcategories');
      Storage::deleteDirectory('/public/products');
      Storage::makeDirectory('/public/categories');
      Storage::makeDirectory('/public/subcategories');
      Storage::makeDirectory('/public/products');

      $this->call(UserSeeder::class);
      $this->call(CategorySeeder::class);
      $this->call(SubcategorySeeder::class);
      $this->call(ProductSeeder::class);
      $this->CALL(ColorSeeder::class);
      $this->call(ColorProductSeeder::class);
      
    }
}
