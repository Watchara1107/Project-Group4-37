<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'image',
        'status',
    ];
}
