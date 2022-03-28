<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function message()
    {
        $helloWorld = "Hello World";
        echo $helloWorld;
        return view('welcome');
    }

    public function nextPage($resultPost)
    {
        if($resultPost === "exercisePage1")
        {
            return view('exercisePage1');
        }
        elseif($resultPost === "exercisePage2")
        {
            return view('exercisePage2');
        }
    }

    
   
}


