<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'name',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function followers()
    {
        return $this->belongsToMany(
            Customer::class,
            'follows',
            'seller_id',
            'customer_id'
        );
    }

}
