<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $guarded =[];

    public function Company(){
        return $this->belongsTo('App\Company');
    }
}
