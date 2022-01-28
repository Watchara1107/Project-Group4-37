<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{ // protected $table = 'categories';
    // protected $fillable = 'name';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'detail',
    ];
}
