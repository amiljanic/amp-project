<?php

use App\ShippingInfo;
use Illuminate\Database\Seeder;

class ShippingInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ShippingInfo::class, 10)->create();
    }
}
