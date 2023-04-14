<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $casts = [
        'productimage' => 'array'
    ];
    protected $fillable = [
        'id',
        'productname',
        'productdesc',
        'productlongdesc',
        'productmrp',
        'productsale',       
        'productfeature',
        'productlongfeature',
        'productimage',
        'status',
        'createdby'
    ];
}