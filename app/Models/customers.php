<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'document',
        'email',
        'postal_code',
        'address',
        'neighborhood',
        'city',
        'number',
        'state'

    ];

    protected $table = 'customers';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;

}
