<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeDashboardController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Dashboard');
    }
}
