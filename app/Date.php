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
        return $this->hasMany('App\Hours');
    }
}
