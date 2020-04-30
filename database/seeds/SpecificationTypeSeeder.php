<?php

use App\SpecificationType;
use Illuminate\Database\Seeder;

class SpecificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SpecificationType::class, 10)->create();
    }
}
