<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function shippingInfo()
    {
        //return $this->hasOne(DefaultShippingInfo::class);
        return $this->belongsToMany(
            ShippingInfo::class,
            'default_shipping_infos',
            'customer_id',
            'shipping_info_id'
        )->withTimestamps();
    }

    public function shippingInfos()
    {
        return $this->hasMany(ShippingInfo::class);
    }

    public function defaultShippingInfo()
    {
        return $this->shippingInfo()->first();
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function following()
    {
        return $this->belongsToMany(
            Seller::class,
            'follows',
            'customer_id',
            'seller_id'
        )->withTimestamps();
    }
}
