<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function variants()
    {
        return $this->belongsToMany(Variant::class)->withTimestamps();
    }
}
