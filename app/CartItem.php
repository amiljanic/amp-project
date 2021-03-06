<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    /**
     * @var mixed
     */

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }
}
