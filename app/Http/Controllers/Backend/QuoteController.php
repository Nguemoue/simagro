<?php

namespace App\Http\Controllers\Backend;

use App\DataObject\QuoteMessageDataObject;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuoteStoreRequest;
use App\Mail\Frontend\QuoteRequestedMail;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function store(QuoteStoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        Quote::query()->create([
            'name'=>$request->validated('name'),
            'email' => $request->validated('email'),
            'message' => $request->validated('message')
        ]);
        $dataObject = new QuoteMessageDataObject(
            message: $request->validated('message'),
            name: $request->validated('name'),
            email: $request->validated('email')
        );
        \Mail::to($dataObject->email)->send(
            (new QuoteRequestedMail(dataObject: $dataObject))
                ->bcc(config('mail.from.address'))
        );
        return redirect()->back()->with('success',"Votre message a bien été envoyé");
    }
}
