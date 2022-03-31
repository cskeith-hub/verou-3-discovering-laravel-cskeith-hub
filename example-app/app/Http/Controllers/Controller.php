<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Coach;
use App\Models\Learner;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function home()
    {
        return view('home');
    }

    public function addLearnerPage()
    {
        return view('addLearnerPage');
    }

    public function coachesOverview()
    {
        $coach = Coach::get();
    
        return view('coachesOverview', compact('coach'));   
    }

    public function learnersOverview()
    {
        $learners = Learner::get();

        return view('learnersOverview', compact('learners'));
    }
}


