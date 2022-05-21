<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'seq',
        'orders_id',
        'product_id',
        'quantity',
        'value',
        'discount',
        'perc_discount'

    ];

    protected $table = 'order_item';
    protected $keyType = 'int';
    protected $primaryKey = 'seq';
    public $incrementing = true;

}
