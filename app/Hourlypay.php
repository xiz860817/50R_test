<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hourlypay extends Model
{
    //
    
    protected $table = 'hourlypay';
    protected $primarykey = 'Empid';
    public $timestamps = false;
    
    public function employee(){
<<<<<<< HEAD
        //return $this->belongsTo('App\Employee','id','id');
=======
        return $this->belongsTo('App\Employee');
>>>>>>> 26ad0035df2aaa208d7cb6d15ada81aeb861c1ac
    }
}
