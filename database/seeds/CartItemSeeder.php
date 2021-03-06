<?php

use App\CartItem;
use App\Customer;
use Illuminate\Database\Seeder;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::all()->each(function ($customer){
            factory(CartItem::class, 3)->create([
                'customer_id' => $customer->id,
            ]);
        });

    }
}
