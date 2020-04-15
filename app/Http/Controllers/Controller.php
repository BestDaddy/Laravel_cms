<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


    public function ex1(){
        return view('index')->with('asdf', 3%5);
    }

    public function ex2($n){
        if($n ==2 || $n == 1|| $n == 12)
            return view('index')->with('asdf', 'winter');
        else if($n <=5 && $n >= 3)
            return view('index')->with('asdf', 'spring');
        else if($n <=8 && $n >= 6)
            return view('index')->with('asdf', 'summer');
        else if($n <=11 && $n >= 9)
            return view('index')->with('asdf', 'fall');
        else
        return view('index')->with('asdf', 'error');
    }
}
