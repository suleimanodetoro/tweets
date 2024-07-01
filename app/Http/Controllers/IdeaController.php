<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Idea::all();
        return view('ideas.index', compact('ideas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idea' => 'required|min:5|max:245',
        ]);

        Idea::create([
            'content' => $request->idea,
            'likes' => 0,
        ]);

        return redirect()->route('dashboard')->with('success', 'Idea posted successfully');
    }

    public function destroy($id)
    {
        $idea = Idea::findOrFail($id);
        $idea->delete();

        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully');
    }
}
