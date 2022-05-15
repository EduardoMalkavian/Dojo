<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stocks extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_id',
        'stock_location_id',
        'quantity',
        'lote'

    ];

    protected $table = 'stocks';
    protected $keyType = 'int';
    public $incrementing = true;

}
