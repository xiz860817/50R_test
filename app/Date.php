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
        //hasMany('App\Hours',這個是要對應到對方的資料表欄位'date_id',這個是自己資料表欄位'Date')
        //兩個值要相對才會成功
        return $this->hasMany('App\Hours','date_id','Date');
    }
}
