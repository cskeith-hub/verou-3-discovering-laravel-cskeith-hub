<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learner;

class CrudController extends Controller
{
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
        return view('exercisePage2', compact('learners'));// if a return learners Overview it bugs
    }
}
