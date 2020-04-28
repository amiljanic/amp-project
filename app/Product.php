<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function specifications()
    {
        return $this->belongsToMany(
            Specification::class,
            'product_specification',
            'product_id',
            'specification_id'
        );
    }
}
