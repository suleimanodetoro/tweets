<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Start with a base query to get ideas ordered by creation date in descending order
        $ideas = Idea::orderBy('created_at', 'DESC');

        // Check if there is a search query parameter
        if (request()->has('search')) {
            // Filter ideas where the content is similar to the search query
            $ideas = $ideas->where('content', 'like', '%'.request()->get('search', '').'%');
        }

        // Paginate the results and pass them to the view
        return view('dashboard', [
            'ideas' => $ideas->paginate(5)
        ]);
    }
}
