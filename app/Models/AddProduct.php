<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    protected $table = 'add_product';

    protected $fillable = [
        'product_name',
        'price',
        'product_description',
        'product_image',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

}
