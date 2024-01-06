<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $table = 'order_products';

    public $fillable = [
        'order_id',
        'product_id',
        'unit_price',
        'qty',
        'amount'
    ];
}
