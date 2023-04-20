<?php

namespace Database\Seeders;

/*use App\Models\Subcategory;*/
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
/*use Illuminate\Support\Str;*/
use Illuminate\Support\Str;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $subcategories = [
            //Celulares y tables
            [
                'category_id'=>1,
                'name' => 'Cell phones and smartphones',
                'slug' => Str::slug('Cell phones and smartphones'),
                'color'=> true,
            ],
            [
                'category_id'=>1,
                'name' => 'Cell phones accesories',
                'slug' => Str::slug('Cell phones accesories'),
                'color'=> false,
            ],
            [
                'category_id'=>1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
                'color'=> true,
            ],
            //Categoria TV and audio
            [

                'category_id'=>2,
                'name' => 'TV and audio',
                'slug' => Str::slug('TV and audio'),
                'color'=> false,
            ],
            [

                'category_id'=>2,
                'name' => 'Audio',
                'slug' => Str::slug('Audio'),
                'color'=> false,
            ],
            [

                'category_id'=>2,
                'name' => 'Card audio',
                'slug' => Str::slug('Card audio'),
                'color'=> false,
            ],
            //Consola y video juegos
            [

                'category_id'=>3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
                'color'=> false,
            ],
            [

                'category_id'=>3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
                'color'=> false,
            ],
            [

                'category_id'=>3,
                'name' => 'PC Games',
                'slug' => Str::slug('PC Games'),
                'color'=> false,
            ],
            [

                'category_id'=>3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
                'color'=> false,
            ],
            //Computing
            [

                'category_id'=>4,
                'name' => 'Laptop',
                'slug' => Str::slug('Laptop'),
                'color'=> true,
            ],
            [

                'category_id'=>4,
                'name' => 'PC Desktop',
                'slug' => Str::slug('PC Desktop'),
                'color'=> true,
            ],
            [

                'category_id'=>4,
                'name' => 'Storage',
                'slug' => Str::slug('Storage'),
                'color'=> true,
            ],
            [

                'category_id'=>4,
                'name' => 'Computer accesories',
                'slug' => Str::slug('Computer accesories'),
                'color'=> true,
            ],
            //Fashion
            [

                'category_id'=>5,
                'name' => 'Women',
                'slug' => Str::slug('Women'),
                'color'=> true,
                'size' => true
            ],
            [

                'category_id'=>5,
                'name' => 'Men',
                'slug' => Str::slug('Men'),
                'color'=> true,
                'size' => true
            ],

            [

                'category_id'=>5,
                'name' => 'Whatch',
                'slug' => Str::slug('Watch'),
                'color'=> true,
            ],
            [

                'category_id'=>5,
                'name' => 'Glasses',
                'slug' => Str::slug('Glasses'),
                'color'=> true,
            ],

        ];

        foreach($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
