<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hours extends Model
{
    //
    protected $table = 'hours';
    protected $primarykey = 'id';
    public $timestamps = false;

    public function date(){
        return $this->belongsTo('App\Date');
    }
}
