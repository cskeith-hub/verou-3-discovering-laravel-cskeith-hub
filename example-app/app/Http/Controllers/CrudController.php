<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Coach;
use app\Models\Learner;

class CrudController extends Controller
{
    public function create(Request $request)
    {
        $learnerName = $request->fname;
        $learner = new Learner();
        $learner->name = $learnerName;
        $learner->save();
        // Learners::insert('insert into learners (name) values (?, ?)', [1, 'Dayle']);
        return view('exercisePage2');
    }
}
