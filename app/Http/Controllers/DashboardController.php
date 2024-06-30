<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // some logic
        $users = [
            [
                'name' => "Arnold",
                'age' => 30,
            ],
            [
                'name' => "Suleiman",
                'age' => 32
            ]

        ];
        return view('dashboard', [
            'userList' => $users
        ]);
    }

}
