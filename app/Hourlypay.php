<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hourlypay extends Model
{
    //
    
    protected $table = 'hourlypay';
    protected $primarykey = 'id';
    public $timestamps = false;
    
    public function employee(){
        return $this->belongsTo(HourlypayEloquent::class,'Hourlypay','Hourlypay');
    }
}
