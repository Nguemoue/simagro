<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'message'=>['required','string'],
            'name'=>['required','string'],
            'email'=>['required','email']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
