<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Coaches;
use App\Models\Learners;



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
            $coaches = Coaches::get();
        // dd($coaches);
            return view('exercisePage1', compact('coaches'));
        }
        elseif($resultPost === "exercisePage2")
        {
            $learners = Learners::get();
            return view('exercisePage2', compact('learners'));
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
       $result = $request->fname;
       echo "Hello {$result} Nice to have you here";
       return view('home');
    }

  
}


