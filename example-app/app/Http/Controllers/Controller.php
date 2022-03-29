<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        return view('index');
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
        elseif(! file_exists($resultPost)) // if action does not exist do this
        {
            dd('File does not exist! Please contact Colin'); // also can ddd Dump,Die and Debug
            // return redirect('/');
            //abort(404);
        }
    }
  
}


