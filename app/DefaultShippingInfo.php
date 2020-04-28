<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefaultShippingInfo extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function shippingInfo()
    {
        return $this->belongsTo();
    }
}
