<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employee';
    public $timestamps = false;
    /*先不要有帳號密碼
    public function user(){
        return $this->belongsTo(UserEloquent::class);
    }*/
}
