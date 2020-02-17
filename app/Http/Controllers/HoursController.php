<?php

namespace App\Http\Controllers;

use App\Hours;
use Illuminate\Http\Request;

class HoursController extends Controller
{
    //
    public function index(){
        $hours = Hours::all();
        return $hours;
    }
}
