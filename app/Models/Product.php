<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public $fillable = [
        'name',
        'description',
        'category_id',
        'status_id',
        'product_key',
        'alternative_product_key',
        'department_id',
        'sat_id',
        'buy_unit_measure_id',
        'sale_unit_measure_id',
        'factor',
        'inventory_managment',
        'cost',
        'cost_without_taxes',
        'cost_piece',
        'stock_quantity',
        'min_quantity',
        'max_quantity',
        'expires',
        'expiration_date',
        'is_service'
    ];

    public function prices(){
        return $this->hasMany(ProductPrice::class);
    }
}
