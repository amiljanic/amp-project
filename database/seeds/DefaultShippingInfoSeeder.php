<?php

use App\Customer;
use App\ShippingInfo;
use Illuminate\Database\Seeder;

class DefaultShippingInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShippingInfo::distinct()->get('customer_id')->each(function ($info){
            $shippingInfo = ShippingInfo::all()->where('customer_id', $info->customer_id)->first();
            $shippingInfo->defaultTo()->attach(Customer::find($info->customer_id));
        });
    }
}
