<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_has_customers extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'customers_id'
    ];

    protected $table = 'user_has_customers';
    protected $keyType = 'int';
    protected $primaryKey = 'users_id';
    public $incrementing = true;

}

