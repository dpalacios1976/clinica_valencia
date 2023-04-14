<?php

namespace App\Http\Requests;

use App\Traits\ApiResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class DoctorUpdateRequest extends FormRequest
{
    use ApiResponse;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('doctors.update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullname' => 'required|string',
            'cedula' => 'required|min:10|max:13',
            'direccion' => 'required|string',
            'code_senecyt' => 'required',
            'mobile' => 'required|max:10',
            'telf' => 'required|max:10',
            'mail' => 'required|email',
            'logo' => 'sometimes|nullable|file',
            'specialities' => 'required|array|min:1',
            'specialities.*' => 'numeric',
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
            'fullname' => 'nombre completo',
            'cedula' => 'cedula',
            'code_senecyt' => 'codigo senecyt',
            'telf' => 'telefono',
            'mail' => 'correo',
            'specialities' => 'especialidades',
        ];
    }

    protected function failedAuthorization()
    {
        $errors = array("No tiene permisos para actualizar medicos");

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
