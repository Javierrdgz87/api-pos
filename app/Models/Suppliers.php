<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suppliers extends Model
{
    use HasFactory, SoftDeletes;
    const STATUS_ACTIVE = 'AC';
    protected $table = 'suppliers';
    
    public $fillable = [
        'status_id',
        'name',
        'legal_representative',
        'alias',
        'rfc',
        'curp',
        'phone',
        'mobile',
        'emails',
        'comments',
        'credit_limit',
        'credit_days'
    ];

    protected $attributes = [
        'status_id' => self::STATUS_ACTIVE
    ];
}
