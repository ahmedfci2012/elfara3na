<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_bills extends Model
{
    protected $table = 'sub_bills';
    protected $fillable = [
         'customer_name','color','weight','price','total_price','section_id','bill_id'
    ];
}
