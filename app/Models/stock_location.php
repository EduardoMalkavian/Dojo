<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_location extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'description'

    ];

    protected $table = 'stock_locations';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;

}
