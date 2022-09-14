<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function result($time_value){
        switch($time_value){
        case 'morning':
            $time = '朝';
            $greeting = 'おはようございます';
            break;
        case 'afternoon':
            $time = '昼';
            $greeting = 'こんにちは';
            break;
        case 'evening';
            $time = '夕方';
            $greeting = 'こんばんは';
            break;
        case 'night';
            $time = '夜';
            $greeting = 'おやすみ';
            break;
        }
        return view("Greeting.greeting",
        ["time"=>$time, "greeting"=>$greeting]);
    }
}
