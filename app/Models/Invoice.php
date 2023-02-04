<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;



class Invoice extends Model
{
    protected $table = 'invoices';

    protected $fillable = [
        'user_id' ,'total_price', 'total_tax','array_shopping'
    ];



    public function user(){

        return $this->belongsTo(User::class);
    }

}
