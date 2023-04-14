<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategorie extends Model
{
    use HasFactory;
    use SoftDeletes;
    // public $timestamps=false;
    protected $fillable = [
        'id',
        'categorietype',
        'subcatname',
        'subcatshortname',
        'subcatfile',
        'subcatproductype',
        'status',
        'createdby'
    ];
}
