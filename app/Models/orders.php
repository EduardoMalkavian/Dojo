<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'number',
        'users_id',
        'date',
        'type',
        'status',
        'customers_id',
        'observation',
        'type_payments_id'

    ];

    protected $table = 'orders';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;

}
