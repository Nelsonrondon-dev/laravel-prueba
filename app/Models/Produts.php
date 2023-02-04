<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Produts extends Model
{
    
    protected $table = 'Produts';


    protected $fillable = [
        'name', 'price', 'tax'
    ];





}
