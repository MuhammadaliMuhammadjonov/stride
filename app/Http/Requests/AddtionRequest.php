<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class AddtionRequest extends FormRequest
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
            // 'name' => 'required|string', // name maydoni uchun talablar qo'shildi
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'image' => 'nullable',
            'text' => 'nullable|string',
            'title' => 'nullable|string',
            'link' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            // 'name.required' => 'Menu nomi majburiy',
            'text.string' => 'Text majburiy',
            'title.string' => 'Title majburiy',
            'link.string' => 'Link majburiy'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $id = request()->id;
        // Validatsiya xatoligini qayta ishlash va xatoliklarni index sahifasiga yuborish
        throw new HttpResponseException(
            redirect()->route('menu.show' , $id)
                ->withErrors($validator)
                ->withInput()
        );
    }
}
