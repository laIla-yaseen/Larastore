<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes; 

    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
    ];

    protected $dates = ['deleted_at']; 
}