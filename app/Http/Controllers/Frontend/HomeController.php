<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\ServiceIconEnum;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimony;

class HomeController extends Controller
{
    public function __invoke()
    {
        $teams = Team::all();
        $services = Service::withCasts(['icon' => ServiceIconEnum::class])->get();
        $partners = Partner::all();
        $testimonies = Testimony::all();
        return view('welcome',[
            'teams' => $teams,
            'services' => $services,
            'partners'=>$partners,
            'testimonies'=>$testimonies
        ]);
    }
}
