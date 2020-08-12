<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = \App\ProductCategory::pluck('id');
 
        $categories->each(function ($category) {
            factory(\App\Product::class)->times(rand(12, 28))->create([
                'category_id' => $category,
            ]);
        });
    }
}
