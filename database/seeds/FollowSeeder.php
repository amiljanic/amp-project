<?php

use App\Customer;
use App\Seller;
use Illuminate\Database\Seeder;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::all()->each(function ($customer){
            $customer->following()->attach(Seller::all()->random(3));
        });
    }
}
