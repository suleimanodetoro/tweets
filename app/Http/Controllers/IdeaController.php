<?php

namespace App\Http\Controllers;

use App\Models\Idea; // Import the Idea model
use Illuminate\Http\Request; // Import the Request class

class IdeaController extends Controller
{
    /**
     * Display a single idea.
     *
     * @param Idea $idea The idea instance to display.
     * @return \Illuminate\View\View The view displaying the idea.
     */
    public function show(Idea $idea)
    {
        // Return the view 'ideas.show' with the given idea
        return view('ideas.show', compact('idea'));
    }

    /**
     * Show the form for editing the specified idea.
     *
     * @param Idea $idea The idea instance to edit.
     * @return \Illuminate\View\View The view displaying the idea edit form.
     */
    public function edit(Idea $idea)
    {
        // Set a flag to indicate that the view is in editing mode
        $editing = true;

        // Return the view 'ideas.show' with the given idea and the editing flag
        return view('ideas.show', compact('idea', 'editing'));
    }

    /**
     * Update the specified idea in the database.
     *
     * @param Idea $idea The idea instance to update.
     * @return \Illuminate\Http\RedirectResponse Redirect to the updated idea view with a success message.
     */
    public function update(Idea $idea)
    {
        // Validate the request input, ensuring 'content' is between 5 and 245 characters
        request()->validate([
            'content' => 'required|min:5|max:245',
        ]);

        // Update the content of the idea with the new value from the request
        $idea->content = request()->get('content', '');

        // Save the updated idea to the database
        $idea->save();

        // Redirect to the view of the updated idea with a success message
        return redirect()->route('ideas.show', $idea->id)->with('success', 'Successfully updated idea');
    }

    /**
     * Display a listing of all ideas.
     *
     * @return \Illuminate\View\View The view displaying the list of ideas.
     */
    public function index()
    {
        // Retrieve all ideas from the database
        $ideas = Idea::all();

        // Return the view 'ideas.index' with the list of ideas
        return view('ideas.index', compact('ideas'));
    }

    /**
     * Store a newly created idea in the database.
     *
     * @return \Illuminate\Http\RedirectResponse Redirect to the dashboard with a success message.
     */
    public function store()
    {
        // Validate the request input, ensuring 'content' is between 5 and 245 characters
        request()->validate([
            'content' => 'required|min:5|max:245',
        ]);

        // Create a new idea with the content from the request
        Idea::create([
            'content' => request()->get('content')
        ]);

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard')->with('success', 'Idea posted successfully');
    }

    /**
     * Remove the specified idea from the database.
     *
     * @param int $id The ID of the idea to delete.
     * @return \Illuminate\Http\RedirectResponse Redirect to the dashboard with a success message.
     */
    public function destroy($id)
    {
        // Find the idea by its ID or fail with a 404 error
        $idea = Idea::findOrFail($id);

        // Delete the found idea from the database
        $idea->delete();

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully');
    }
}
