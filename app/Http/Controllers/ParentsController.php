<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;


class ParentsController extends Controller
{
    public function index()
    { 
       $schedule= Schedule::with('user')->get();
    //    dd($schedule->toArray());
        return view('parent',compact('schedule'));
    }
}
