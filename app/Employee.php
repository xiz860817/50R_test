<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employee';
    public $timestamps = false;
    public function new(){
        $this->Name = '黃羿欣';
        $this->Address = 'load.10';
        $this->Phone = '0912345678';
        $this->Hourlypay = 158;
        $this->save();
    }
}
