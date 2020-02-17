<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    //
    protected $table = 'date';
    public $timestamps = false;

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
    public function hours(){
        echo $this->Date;
        return $this->hasMany('App\Hours','date_id',$this->Date);
    }
}
