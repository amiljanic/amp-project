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
}
