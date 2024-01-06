<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTax extends Model
{
    use HasFactory;
    protected $table = 'product_taxes';

    public $fillable = [
        'product_id',
        'tax_id'
    ];

    public $timestamps = false;
}
