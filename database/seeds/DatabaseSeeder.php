<?php

use App\Country;
use App\ShippingInfo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SellerSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ShippingInfoSeeder::class);
        $this->call(DefaultShippingInfoSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SpecificationGroupSeeder::class);
        $this->call(SpecificationTypeSeeder::class);
        $this->call(SpecificationSeeder::class);
        $this->call(VariantSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderItemSeeder::class);
        $this->call(CartItemSeeder::class);
        $this->call(ProductSpecificationSeeder::class);
        $this->call(SpecificationVariantSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(FollowSeeder::class);
    }
}
