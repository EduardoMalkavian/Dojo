<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bulk extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'slug',
        'name'
    ];

    protected $table = 'bulk';
    protected $keyType = 'string';
    protected $primaryKey = 'slug';
    public $incrementing = false;

}
