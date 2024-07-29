<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
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
    public function rules()
    {
        return [
            'titulo' => 'required|string|max:20',
            'descripcion'=>'required|string|max:50',
            'image' => [
            $this->route('servicio') ? 'nullable' : 'required',
            'mimes:jpg,jpeg,png'
        ]
                    //'dimensions:width=600', 'height=200',
                    //'dimensions:ratio=16/9',
                    //'max:2000'],
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' =>  'El titulo es obligatorio.',
            'titulo.max' =>  'El titulo no debe ser mayor a 10 caracteres.',
            'descripcion.required' =>  'La descripcion es obligatorio.',
            'descripcion.max' =>  'La descripcion no debe ser mayor a 10 caracteres.',
            'image.required' =>  'Debes seleccionar una imagen.',
        ];
    }
}
