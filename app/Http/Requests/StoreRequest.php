<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'subject' => 'required|min:3|max:255|unique:supports',
            'body' => [
                'required',
                'min:3',
                'max:10000'
            ]
        ];
        if ($this->method() ==='PUT') {
            $rules = [
                'subject' => [
                    'required',
                    'min:3',
                    'max:255',
                    Rule::unique('supports')->ignore($this->id),
                ],
                'body' => [
                    'required',
                    'min:3',
                    'max:10000'
                ]
            ];
        }

        return $rules;
    }
}
