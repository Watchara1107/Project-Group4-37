<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herb extends Model
{

    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'image',
    ];
}
