<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HourlypayController extends Controller
{
    //
    public function index(){
        $this->Hourlypay = 150;
        $this->save();
    }
}
