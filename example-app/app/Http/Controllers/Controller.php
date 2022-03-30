<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Coach;
use App\Models\Learner;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function home()
    {
        return view('home');
    }

    public function nextPage($resultPost)
    {
        if($resultPost === "createLearner")
        {
            return view('createLearner');
        }
        elseif($resultPost === "exercisePage1")
        {
            $coach = Coach::get();
    
            return view('exercisePage1', compact('coach'));
        }
        elseif($resultPost === "exercisePage2")
        {
            $learners = Learner::get();

            return view('exercisePage2', compact('learners'));
        }
        elseif(! file_exists($resultPost)) // if action does not exist do this
        {
            dd('File does not exist! Please contact Colin'); // also can ddd Dump,Die and Debug
            // return redirect('/');
            //abort(404);
        }
    }


    

  
}


