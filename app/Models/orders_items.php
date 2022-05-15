<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders_items extends Model
{
    use HasFactory;

    protected $fillable = [
        'seq',
        'orders_id',
        'products_id',
        'quantity',
        'value',
        'discount',
        'perc_discount'

    ];

    protected $table = 'orders_items';
    protected $keyType = 'int';
    protected $primaryKey = 'seq';
    public $incrementing = true;

}
