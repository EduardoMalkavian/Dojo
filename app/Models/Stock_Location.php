<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock_Location extends Model
{
    use HasFactory;

    protected $fillable = [
      
        'description' 

    ];

    protected $table = 'description';
}
