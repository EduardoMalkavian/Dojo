<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'category_id'
    ];

    protected $table = 'categories';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;

}
