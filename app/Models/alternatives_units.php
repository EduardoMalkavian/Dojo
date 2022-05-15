<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternatives_units extends Model
{
    use HasFactory;
    protected $fillable = [
        'products_id',
        'bulks_slug',
        'quantity',
        'divide_or_multiply'

    ];

    protected $table = 'categories';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;

}
