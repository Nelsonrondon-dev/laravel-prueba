<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Shopping extends Model
{
    
    protected $table = 'Shopping';


    protected $fillable = [
        'user_id', 'produt_id','price', 'tax', 'status', 'name'
    ];


}
