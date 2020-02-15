<?php

namespace App\Http\Controllers;

use App\Hourlypay;
use Illuminate\Http\Request;

class HourlypayController extends Controller
{
    //
    public function index(){
        //
        $h = Hourlypay::find(1)->hourlypay;
    }
}
