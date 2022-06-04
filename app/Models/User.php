<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'type'
    ];

    protected $table = 'users';
    /*
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;
    */

}
