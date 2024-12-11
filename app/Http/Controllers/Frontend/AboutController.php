<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Team;

class AboutController extends Controller
{
    public function __invoke()
    {
        $teams = Team::all();
        return view('about', [
            'teams' => $teams
        ]);
    }
}
