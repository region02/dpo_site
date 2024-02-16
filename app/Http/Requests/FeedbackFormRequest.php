<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackFormRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;


    public function rules(): array
    {
        return [
            'name' => ['required','string', 'max:50'],
            'feedback_type' => ['required','in:мессенджер,почта,телефон'],
            'contact' => ['required','string', 'max:255'],
            'question' => ['required','string', 'max:255']
        ];
    }
}
