<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactorialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'number' => 'required|numeric|integer|min:0',
        ];
    }
/**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
        'number.required' => 'Введите данные',
        'number.numeric' => 'Введите число',
        'number.integer' => 'Введите целое число',
        'number.min' => 'Число должно быть больше :min',
    ];
}
}
