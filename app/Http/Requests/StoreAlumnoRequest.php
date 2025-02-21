<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnoRequest extends FormRequest
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
            "nombre" => "required|string|min:5",
            "email" => "required|email|unique:alumnos,email",
            "dni" => [
                "required",
                "regex:/^[0-9]{8}-[A-Z]$/",
            ],
            "f_nac" => "required|date|before:today",
            //
        ];
    }

    public function messages(): array
    {
        return [
//            "nombre.required" => "El nombre es requerido",
            "nombre.string" => "El nombre debe ser texto",
            "nombre.min" => "El nombre debe tener al menos 5 caracteres",
            "email.required" => "El email es requerido",
            "email.unique" => "El email ya esta registrado",
            "dni.regex" => "El DNI debe tener al menos 8 caracteres guión y letra",
            "f_nac.required" => "La fecha de nacimiento es requerida",
            "f_nac.before" => "La fecha no puede ser posterior a la fecha actual"

        ];
    }
}
