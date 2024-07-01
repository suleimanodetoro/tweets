<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{

    public function index()
    {
        return view('ideas.index');
    }

    public function store()
    {
        request()->validate([
            'idea' => 'required|min:5|max:245',

        ]);
        $idea = Idea::create([
            'content' => request()->get('idea', ''),
            'likes' => 0,
        ]);

        //use 'with' to pass a one time session that

        return redirect()->route('dashboard')->with('success','Idea posted successfully');
    }
}
