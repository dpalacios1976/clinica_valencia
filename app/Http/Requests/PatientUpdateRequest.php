<?php

namespace App\Http\Requests;

use App\Traits\ApiResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class PatientUpdateRequest extends FormRequest
{
    use ApiResponse;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('patients.update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'pname' => 'required|string|min:3|max:40',
            'sname' => 'nullable|sometimes|string|min:3|max:40',
            'papellido' => 'required|string|min:3|max:40',
            'sapellido' => 'nullable|sometimes|string|min:3|max:40',
            'type_ident' => 'required',
            'identification' => 'required|min:9|max:10',
            'estado_civil' => 'sometimes|nullable',
            'genero' => 'required',
            'direccion' => 'required|string',
            'seguro' => 'sometimes|nullable',
            'tipo_sangre' => 'required',
            'etnia' => 'sometimes|nullable',
            'nacionalidad' => 'required',
            'provincias' => 'required',
            'ciudades' => 'required',
            'parroquias' => 'required',
            'direccion' => 'required',
            'referencia' => 'required',
            'celular' => 'required|max:12',
            'telf' => 'sometimes|nullable|max:12',
            'telf2' => 'sometimes|nullable|max:12',
            'mail' => 'required|email',
            'pais' => 'required',
            'nacimiento' => 'required',
            'fecha_nacimiento' => 'required',
            'foto' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'discapacidad' => 'sometimes|nullable',
            'llamar' => 'sometimes|nullable',
            'telf_cont' => 'sometimes|nullable',
            'dir_cont' => 'sometimes|nullable',
            'educacion' => 'sometimes|nullable',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'pname' => 'primer nombre',
            'sname' => 'segundo nombre',
            'papellido' => 'primer apellido',
            'sapellido' => 'segundo apellido',
            'type_ident' => 'tipo identificacion',
            'identification' => 'identificacion',
            'estado_civil' => 'estado civil',
            'referencia' => 'referencia domicilio',
            'telf' => 'telefono',
            'telf2' => 'telefono 2',
            'mail' => 'correo',
            'nacimiento' => 'lugar nacimiento',
            'fecha_nacimiento' => 'fecha nacimiento',
            'discapacidad' => 'tipo discapacidad',
            'llamar' => 'llamar a',
            'telf_cont' => 'telefono contacto',
            'dir_cont' => 'direccion contacto',
        ];
    }

    protected function failedAuthorization()
    {
        $errors = array("No tiene permisos para actualizar pacientes");

        throw new HttpResponseException(
            $this->jsonErrorValidate("Permisos", $errors)
        );
    }

    /**
     * Return for form submission with javascript
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            $this->jsonErrorValidate("Faltan datos requeridos", $errors)
        );
    }
}
