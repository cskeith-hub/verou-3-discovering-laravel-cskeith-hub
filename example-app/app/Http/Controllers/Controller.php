<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function home()
    {
        return view('home');
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

    public function formHandle(Request $request)
    {
        $request->name;
        dd($request->name);§
       return view('home');
    }
  
}


