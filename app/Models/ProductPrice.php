<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;
    protected $table = 'product_prices';

    public $fillable = [
        'price_number',
        'product_id',
        'profit',
        'sale_price',
        'sale_price_neto',
        'wholesale_price'
    ];
}
