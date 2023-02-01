<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTipoAsignacionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tipo'=> 'required|string|min:1',
            'descripcion'=> 'nullable|string|min:1',
        ];
    }

    public function messages()
    {
        return [
            'tipo.required' => 'El tipo de asignaciones obligatorio',
        ];
    }
}
