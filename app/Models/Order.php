<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'number',
        'users_id',
        'date',
        'type',
        'status',
        'customer_id',
        'observation',
        'type_payment_id'

    ];

    protected $table = 'orders';
    /*
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;
    */

}
