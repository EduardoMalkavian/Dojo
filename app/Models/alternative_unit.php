<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternative_unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'bulk_slug',
        'quantity',
        'divide_or_multiply'

    ];

    protected $table = 'category';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;

}
