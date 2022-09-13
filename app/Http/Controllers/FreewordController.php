<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreewordController extends Controller
{
    public function message($message_value){
        $message=$message_value;
        return view("Greeting.freeword",
        ['message'=>$message]);
    }
}
