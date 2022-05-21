<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_has_customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'customer_id'
    ];

    protected $table = 'user_has_customer';
    protected $keyType = 'int';
    protected $primaryKey = 'users_id';
    public $incrementing = true;

}

