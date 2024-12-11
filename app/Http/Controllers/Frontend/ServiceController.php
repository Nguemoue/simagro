<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\ServiceIconEnum;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::withCasts(['icon' => ServiceIconEnum::class])->get();
        return view('services',['services'=>$services]);
    }

    public function show(int $serviceId)
    {
        $service = Service::find($serviceId);
        return view('services.detail',[
            'service'=>$service
        ]);
    }
}
