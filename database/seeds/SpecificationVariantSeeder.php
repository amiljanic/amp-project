<?php

use App\Specification;
use App\Variant;
use Illuminate\Database\Seeder;

class SpecificationVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Variant::all()->random(10)->each(function ($variant){
            $variant->specifications()->attach(Specification::all()->random(3));
        });
    }
}
