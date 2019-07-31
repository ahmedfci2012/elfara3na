<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table = 'bills';
    protected $fillable = [
         'customer_name'
    ];
}
