<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function election(){
        $greeting_list = ['おはようございます','こんにちは','こんばんは','おやすみ'];
        $random = $greeting_list [array_rand($greeting_list,1)];
        return view("Greeting.random",
        ['random'=>$random]);
    }
}
