<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required','string', 'max:50'],
            'phone' => ['required','string','max:20'],
            'email' => ['required','string', 'max:255','email:dns']
        ];
    }
}
