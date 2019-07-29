<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class SubSection extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'components';
    protected $fillable = [
       'section_id', 'num', 'name', 'quantity',
    ];

    
}
