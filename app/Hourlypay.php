<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hourlypay extends Model
{
    //
    
    protected $table = 'hourlypay';
    public $timestamps = false;
    
    public function employee(){
        return $this->belongsTo('App\Employee','Hourlypay','Hourlypay');
    }
}
