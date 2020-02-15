<?php

namespace App\Http\Controllers;

use App\Hourlypay;
use Illuminate\Http\Request;

class HourlypayController extends Controller
{
    //
    public function index(){
        $pay = new Hourlypay;
        $pay->Hourlypay = 150;
        $pay->save();
    }
}
