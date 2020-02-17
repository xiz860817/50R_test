<?php

namespace App\Http\Controllers;

use App\Hours;
use Illuminate\Http\Request;

class HoursController extends Controller
{
    //
    public function index(){
        $hour = new Hours;
        $hour->date_id = '2020-02-17';
        $hour->Hours = 8;
        $hours = Hours::all();
        return $hours;
    }
}
