<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learner;

class StudentController extends Controller
{
    
    public function addLearnerPage()
    {
        return view('students\addLearnerPage');
    }

    public function learnersOverview()
    {
        $learners = Learner::get();

        return view('students\learnersOverview', compact('learners'));
    }

    public function create(Request $request)
    {
        $learnerName = $request->fname;
        $learnerEmail = $request->email;
        $learnerGroup = $request->group;

        $learner = new Learner();
        $learner->name = $learnerName;
        $learner->email = $learnerEmail;
        $learner->group_id = $learnerGroup;

        // dd($learner->name,$learner->email,$learner->group);
        $learner->save();

        
        $learners = Learner::get();
        // Learners::insert('insert into learners (name) values (?, ?)', [1, 'Dayle']);
        return view('students\learnersOverview', compact('learners'));// if a return learners Overview it bugs
    }
}
