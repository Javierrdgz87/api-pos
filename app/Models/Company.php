<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';

    public $fillable = [
        'name',
        'rfc',
        'status_id',
        'email',
        'state',
        'county',
        'zip',
        'address'
    ];
}
