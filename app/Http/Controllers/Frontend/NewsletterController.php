<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\NewsletterRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(NewsletterRequest $request): \Illuminate\Http\RedirectResponse
    {
        Newsletter::query()->updateOrCreate([
            'email'=>$request->validated('email')
        ],[
            'updated_at'=>now()
        ]);
        return redirect()->back()->with('success',"Ajoute avec succès");
    }
}
