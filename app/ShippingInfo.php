<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingInfo extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function defaultTo()
    {
        return $this->belongsToMany(
            Customer::class,
            'default_shipping_infos',
            'shipping_info_id',
            'customer_id'
        )->withTimestamps();
    }

    public function defaultToCustomer()
    {
        return $this->defaultTo()->first();
    }
}
