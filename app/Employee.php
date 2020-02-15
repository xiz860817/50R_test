<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employee';
    protected $primarykey = 'Empid';
    public $timestamps = false;
    /*先不要有帳號密碼
    public function user(){
        return $this->belongsTo(UserEloquent::class);
    }*/
    public function date(){
        return $this->hasMany(DateEloquent::class,'Empid');
    }
    public function hourlypay(){

        return $this->hasMany('App\Hourlypay','id','Empid');

    }
}
