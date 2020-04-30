<?php

use App\Product;
use App\Specification;
use Illuminate\Database\Seeder;

class ProductSpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::all()->each(function ($product){
            $product->specifications()->attach(Specification::all()->random(4));
        });
    }
}
