<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarAlumnoRequest extends FormRequest
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
            'numeroControl' => 'required|unique:alumnos,numeroControl,'.$this-> route('alumno')->id,
            'nombres' => 'required',
            'apellidoP'  => 'required', 
            'apellidoM' => 'required',
            'correo' => 'required|unique:alumnos,correo,'.$this-> route('alumno')->id,
            'contrasena' => 'required',
            'inscrito' => 'required'
        ];
    }
}
