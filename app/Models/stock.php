<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'stock_location_id',
        'quantity',
        'lote'

    ];

    protected $table = 'stock';
    protected $keyType = 'int';
    public $incrementing = true;

}
