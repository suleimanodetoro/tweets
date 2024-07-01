<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    //{
    //     // manual first tweet to confirm database set up and integration
    //     $idea = new Idea();
    //     $idea->content = "Hello World";
    //     $idea->likes = $idea->likes + 1; // Incrementing an existing value
    //     $idea->save();
        return view('dashboard',[
            'ideas' => Idea::orderBy('created_at','DESC')->get()
        ]);
    }

}
