<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class SectionRequest extends FormRequest
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
            'name' => 'required|string', // name maydoni uchun talablar qo'shildi
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        // Validatsiya xatoligini qayta ishlash va xatoliklarni index sahifasiga yuborish
        throw new HttpResponseException(
            redirect()->route('menu.create')
                ->withErrors($validator)
                ->withInput()
        );
    }
}
