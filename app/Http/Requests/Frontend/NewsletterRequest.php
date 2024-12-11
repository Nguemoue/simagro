<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email'=>['required','email']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
