<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class coachController extends Controller
{
    public function addCoachPage()
    {
        return view('coaches\addCoachPage');
    }
    public function coachesOverview()
    {
        $coach = Coach::get();
    
        return view('coaches\coachesOverview', compact('coach'));   
    }

    public function create(Request $request)
    {
        $coachName = $request->fname;
        $coachGroup = $request->group;

        $coach = new coach();
        $coach->name = $coachName;
        $coach->group_id = $coachGroup;

        // dd($learner->name,$learner->email,$learner->group);
        $coach->save();

        
        $coaches = coach::get();
        // Learners::insert('insert into learners (name) values (?, ?)', [1, 'Dayle']);
        return view('coaches\coachesOverview', compact('coaches'));// if a return learners Overview it bugs
    }
}
