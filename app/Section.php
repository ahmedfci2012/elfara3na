<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Section extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'sections';
    protected $fillable = [
        'num', 'name', 'quantity',
    ];

    
}
