<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'subject'=>'required|min:3|string',
            'email'=>'required|email',
            'from_email'=>'required|email',
            'name'=>'required|min:3|string',
            'employ_name'=>'required|min:3|string',
            'cc'=>'required|email',
            'desc'=>'required|min:3',
            'file'=>'nullable',
        ];
    }
}
