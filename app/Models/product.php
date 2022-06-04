<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'price',
        'description',
        'color',
        'quantity',
        'height',
        'width',
        'depth',
        'weight',
        'category_id',
        'active',
        'bulk_slug'

    ];

    protected $table = 'products';
    /*
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;
    */

}
