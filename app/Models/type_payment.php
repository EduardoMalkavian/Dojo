<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    protected $table = 'type_payment';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;

}
